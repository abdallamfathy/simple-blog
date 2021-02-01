@extends('layouts/app')

@section('content')

@include('admin/includes/errors')


<div class="card">
    @csrf
    <div class="card-header">Update category: {{$category->name}}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('category/update',['id'=>$category->id]) }}">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Name</h5>
                </label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                @csrf
            </div>
            @csrf
        </form>
    </div>

</div>

@stop