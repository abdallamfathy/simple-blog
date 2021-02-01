
@extends('layouts/app')

@section('content')

@if(count($errors)>0)

<ul class="list-group">
    @foreach($errors->all() as $error)
    <li class="list-group-item">
        {{$error}}
    </li>
    @endforeach


</ul>

@endif


<div class="card">
    @csrf
    <div class="card-header">Create new post</div>
    <div class="card-body">
        <form method="POST" action="{{ route('post/store') }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Title</h5>
                </label>
                <input type="text" name="title" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Featured images</h5>
                </label>
                <input type="file" name="featured" class="form-control">

            </div>

            <div class="form-group">
                <label>
                    <h5>Select a category</h5>
                </label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tags">
                    <h5>Select Tags:</h5>
                </label>
                @foreach($tags as $tag)
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}">
                        {{$tag->tag}}
                    </label>
                </div>
                @endforeach
            </div>


            <div  class="form-group">

                <label>
                    <h5>Content</h5>
                </label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
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




