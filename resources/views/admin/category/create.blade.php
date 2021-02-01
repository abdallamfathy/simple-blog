@extends('layouts/app')

@section('content')

@include('admin/includes/errors')


<div class="card">
    @csrf
    <div class="card-header">Create new category</div>
    <div class="card-body">
        <form method="POST" action="{{ route('post/category') }}">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Name</h5>
                </label>
                <input type="text" name="name" class="form-control">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                @csrf
            </div>
            @csrf
        </form>
    </div>

</div>

@stop