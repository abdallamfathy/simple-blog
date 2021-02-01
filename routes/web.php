<?php

use Illuminate\Support\Facades\Route;
use App\Events\Test;

Route::get('/','FrontEndController@index')->name('index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function () {
    event(new Test('hello world'));
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::middleware('auth')->prefix('admin')->group(function(){

       
        Route::get('/post/create', 'PostsController@create')->name('post/create');
        Route::post('/post/store', 'PostsController@store')->name('post/store');
        Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post/delete');
        Route::get('/post/trashed', 'PostsController@trashed')->name('post/trashed');
        Route::get('/post/kill{id}', 'PostsController@kill')->name('post/kill');
        Route::get('/post/restore{id}', 'PostsController@restore')->name('post/restore');
        Route::get('/post/edit{id}', 'PostsController@edit')->name('post/edit');
        Route::post('/post/update{id}', 'PostsController@update')->name('post/update');
        Route::get('/posts', 'PostsController@index')->name('posts');
        Route::get('/post/category', 'CategoriesController@create')->name('post/category');
        Route::get('/categories', 'CategoriesController@index')->name('categories');
        Route::post('/post/category', 'CategoriesController@store')->name('post/category');
        Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category/edit');
        Route::post('/category/update/{id}', 'CategoriesController@update')->name('category/update');
        Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category/delete');
        Route::get('/tags', 'TagsController@index')->name('tags');
        Route::get('/tag/create', 'TagsController@create')->name('tag/create');
        Route::post('/tag/store', 'TagsController@store')->name('tag/store');
        Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag/edit');
        Route::post('/tag/update/{id}', 'TagsController@update')->name('tag/update');
        Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag/delete');
        Route::get('/users', 'UsersController@index')->name('users');
        Route::get('/user/create', 'UsersController@create')->name('user/create');
        Route::post('/user/store', 'UsersController@store')->name('user/store');
        Route::get('/user/admin/{id}', 'UsersController@admin')->name('user/admin')->middleware('admin');
        Route::get('/user/NotAdmin/{id}', 'UsersController@NotAdmin')->name('user/NotAdmin')->middleware('admin');
        Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user/destroy');
        Route::get('/user/profile', 'ProfilesController@index')->name('user/profile');
        Route::post('/user/profile/update', 'ProfilesController@update')->name('user/profile/update');
        Route::get('/settings', 'SettingsController@index')->name('settings')->middleware('admin');
        Route::post('/settings/update', 'SettingsController@update')->name('settings/update')->middleware('admin');











    });
    
//});