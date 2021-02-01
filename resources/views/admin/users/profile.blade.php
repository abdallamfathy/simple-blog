@extends('layouts/app')

@section('content')

@include('admin/includes/errors')


<div class="card">
    @csrf
    <div class="card-header">Edit your profile</div>
    <div class="card-body">
        <form method="POST" action="{{ route('user/profile/update') }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>UserName:</h5>
                </label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>E-mail:</h5>
                </label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>New Password:</h5>
                </label>
                <input type="password" name="password"  class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Avatar:</h5>
                </label>
                <input type="file" name="avatar" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Facebook:</h5>
                </label>
                <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Youtube:</h5>
                </label>
                <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>About:</h5>
                </label>
                <textarea class="form-control" name="about" id="about" rows="6" cols="6">{{$user->profile->about}}</textarea>

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