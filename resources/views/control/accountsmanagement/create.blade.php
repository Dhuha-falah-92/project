@extends('control.layouts.app')

@section('content')



<div class="card">
        <div class="card-header">{{ __(' ') }}
            <div class="pull-left">
     
                <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('accountsmanagement.index') }}"> </a> Create New User   </h2>

            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('accountsmanagement.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                {{-- <div class="form-check row mb-0">
                        <div class="col-md-6 offset-md-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="admin">
                    <label class="form-check-label " for="exampleCheck1">As Admin</label>
                  </div>
                </div> --}}
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="admin" name="type" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          As Admin
                        </label>
                      </div>


                <br>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-outline-success">
                                Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  
  </div>
@endsection