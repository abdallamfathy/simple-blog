@extends('layouts/app')

@section('content')

@include('admin/includes/errors')


<div class="card">
    @csrf
    <div class="card-header">Update tag</div>
    <div class="card-body">
        <form method="POST" action="{{ route('tag/update',['id'=>$tag->id]) }}">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Tag Name</h5>
                </label>
                <input type="text" name="tag" class="form-control" value="{{$tag->tag}}">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">update</button>
                @csrf
            </div>
            @csrf
        </form>
    </div>

</div>

@stop