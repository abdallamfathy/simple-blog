
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
    <div class="card-header">Edit blog setting</div>
    <div class="card-body">
        <form method="POST" action="{{ route('settings/update') }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">

                <label>
                    <h5>Site Name</h5>
                </label>
                <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Address</h5>
                </label>
                <input type="text" name="address" value="{{$settings->address}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Contact Number</h5>
                </label>
                <input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control">

            </div>
            <div class="form-group">

                <label>
                    <h5>Contact Email</h5>
                </label>
                <input type="text" name="contact_email" value = "{{$settings->contact_email}}" class="form-control">

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