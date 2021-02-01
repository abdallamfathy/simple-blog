@extends('layouts.app')

@section('content')

<div class="card">
    <table class="table table-hover">
        
            <thead>

                <th>category name</th>
                <th>Editing</th>
                <th>Delete</th>
            </thead>
        

        
            <tbody>

    @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><a href="{{route('category/edit',['id'=>$category->id])}}"><button class="btn btn-info">Edit</button></td>
                    <td><a href="{{route('category/delete',['id'=>$category->id])}}"><button class="btn btn-danger">Delete</button></td>
                </tr>

    @endforeach
            </tbody>
        

    </table>
</div>

@stop