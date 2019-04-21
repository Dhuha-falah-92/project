@extends('control.layouts.app')

@section('content')
<div class="jumbotron ">
        <h1 class="display-4">Hello, world!</h1>
        <hr class="my-4">
        <img src="{{ $user->avatar }}" height="150" width="150" alt="..." class="rounded-circle align-center">
        <div class="float-lg-right">
        <a class="">{{ $user ->name }}'s profile </a>
        </div>
        

        <form enctype="multipart/form-data" action="{{ route('profile.store') }}" method="POST" class="" >
          <label>Update Profile Image</label>
          <input type="file" name="avatar" class="border border-primary">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="pull-right btn-sm btn-primary">
        </form>
      </div>


  
    @endsection


   


    	

              
                                                

