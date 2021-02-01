@extends('layouts.app')

@section('content')

<div class="card">
    <table class="table table-hover">
        
            <thead>

                <th>Tag name</th>
                <th>Editing</th>
                <th>Delete</th>
            </thead>
        

        
            <tbody>

    @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->tag}}</td>
                    <td><a href="{{route('tag/edit',['id'=>$tag->id])}}"><button class="btn btn-info">Edit</button></td>
                    <td><a href="{{route('tag/delete',['id'=>$tag->id])}}"><button class="btn btn-danger">Delete</button></td>
                </tr>

    @endforeach
            </tbody>
        

    </table>
</div>

@stop