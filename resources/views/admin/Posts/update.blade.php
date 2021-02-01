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
    <div class="card-header">Update post: {{$post->title}}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('post/update',['id'=>$post->id]) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Title</h5>
                </label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">

            </div>
            <div class="form-group">

                <label>
                    <h5>Featured images</h5>
                </label>
                <input type="file" name="featured" class="form-control">

            </div>

            <div class="form-group">
                <label>Select a category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"
                    @if($post->category->id == $category->id)
                    selected
                    @endif
                    >{{$category->name}}</option>
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
                        <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}"
                        @foreach($post->tags as $t)
                        @if($tag->id == $t->id)
                        checked
                        @endif
                        @endforeach
                        >
                        {{$tag->tag}}
                    </label>
                </div>
                @endforeach
            </div>

            <div class="form-group">

                <label>
                    <h5>Content</h5>
                </label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
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