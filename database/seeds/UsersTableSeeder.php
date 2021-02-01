<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= App\User::create([
            'name'=>'abdu',
            'email'=>'abdu@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1,
            

        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/1.png',
            'about'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus nulla 
            est esse voluptatem odit voluptatibus doloremque fugit quam totam animi atque eligendi aut, sunt, praesentium minima facere mollitia. Quam.',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
            ])
;    }
}
