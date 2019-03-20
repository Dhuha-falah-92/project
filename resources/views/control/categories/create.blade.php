@extends('control.layouts.app')

@section('content')

<div class="row">
        <div class="col-12">
                <div class="card">
                        <div class="card-header">{{ __(' ') }}
                                <div class="pull-left">
                                   
                                    <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('categories.index') }}"> </a>Add Category   </h2>

                                </div>
                            </div>
                    
                        <div class="card-body">
                           
                    
                            <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                     
                                      
                                    </div>
                                </div>
                    

        <form method="POST" action="{{ route('categories.store') }}" >
                @csrf
                
                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus>
    
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>
    
                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}" name="details" required>
    
                            @if ($errors->has('details'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-success">
                            Submit
                        </button>
                    </div>
            </form>
                        </div></div></div></div>
    
@endsection