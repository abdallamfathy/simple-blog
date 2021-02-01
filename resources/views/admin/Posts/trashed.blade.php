@extends('layouts.app')

@section('content')

<div class="card">
    <table class="table table-hover">
        
            <thead>

                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Delete</th>
            </thead>
        

        
            <tbody>

    @foreach($posts as $post)
                <tr>
                    <td><img src="{{asset($post->featured)}}"  width="50px" height="50px"></td>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('category/edit',['id'=>$post->id])}}"><button class="btn btn-info">Edit</button></td>
                    <td><a href="{{route('post/restore',['id'=>$post->id])}}"><button class="btn btn-success">Restore</button></td>
                    <td><a href="{{route('post/kill',['id'=>$post->id])}}"><button class="btn btn-danger">Delete</button></td>
                </tr>

    @endforeach
            </tbody>
        

    </table>
</div>

@stop