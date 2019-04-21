@extends('control.layouts.app')

@section('content')


          
                
<div class="row">
    <div class="col-12">
        <div class="card">
        
                
            <div class="card-body">

                    <div class="card-header">{{ __(' ') }}
                            <div class="pull-left">
                                <h3>Update Site Information </h3>
                            </div>
                        </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ $data->logo }}" alt="user"  width="200" height="200" class="rounded-circle">
                </div>
            <br>
                <form enctype="multipart/form-data" action="{{ route('site.store') }}" method="POST" class="" >
                    <div class="form-group row">
                        <label for="sitename" class="col-md-3 col-form-label text-md-right">{{ __('Site Name') }}</label>
                            <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('sitename') ? ' is-invalid' : '' }}" value="{{ $data->sitename }}" name="sitename" required>
                                    @if ($errors->has('sitename'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sitename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="slogo" class="col-md-3 col-form-label text-md-right">{{ __('Site SLogo') }}</label>
                                    <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('slogo') ? ' is-invalid' : '' }}" value="{{ $data->slogo }}" name="slogo" required>
                                            @if ($errors->has('slogo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slogo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                        
                                <div class="form-group row">
                                        <label for="logo" class="col-md-3 col-form-label text-md-right">{{ __('Site Logo') }}</label>
                                            <div class="col-md-6">
                                                    <input  type="file"   name="logo" required>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            </div>
                                        </div>



                                        <div class="card-header">{{ __(' ') }}
                                                <div class="pull-left">
                                                    <h3>Update Site Contact Information </h3>
                                                </div>
                                            </div>
                                            <br>

                                        <div class="form-group row">
                                                <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Phone') }}</label>
                                                    <div class="col-md-6">
                                                            <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ $data->phone }}" name="phone" required>
                                                            @if ($errors->has('phone'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>
                                                            <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $data->email }}" name="email" required>
                                                                    @if ($errors->has('email'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                           
                        

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-success">
                                            Submit
                                        </button>
                                    </div>
                        
                            <div class="comment-footer">
                                    {{-- <span class="text-muted float-right">April 14, 2016</span>  --}}
                                    
                                </div>
                            </div>
                          </form>
                        
                     
                </div>
                <!-- Comment Row -->
                
              
            </div>
         
        </div>
        






        
       




        

@endsection