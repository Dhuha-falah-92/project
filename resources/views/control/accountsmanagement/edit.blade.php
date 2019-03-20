@extends('control.layouts.app')

@section('content')



<div class="card">
<div class="card-header">{{ __(' ') }}
        <div class="pull-left">
           
            <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('accountsmanagement.index') }}"> </a> Edit User Information  </h2>
        </div>
    </div>

<div class="card-body">
    
    <form action="{{ route('accountsmanagement.update',$data->id) }}" method="POST">
        @csrf
        @method('PUT')



        <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $data->name }}"   required autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>












   
         {{-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $data->email }}" class="form-control" placeholder="Name">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
   
    </form>
</div></div>

@endsection