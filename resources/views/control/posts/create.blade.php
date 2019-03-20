@extends('control.layouts.app')

@section('content')
<div class="row">
        <div class="col-12">
                <div class="card">
                        <div class="card-header">{{ __(' ') }}
                                <div class="pull-left">
                                        <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('posts.index') }}"> </a>Add Post  </h2>
                                 
                                </div>
                            </div>
                    
                        <div class="card-body">
                           
                    
                            <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                     
                                      
                                    </div>
                                </div>
                    

        <form method="POST" action="{{ route('posts.store') }}" >
                @csrf
                
                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
    
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"  required autofocus>
    
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>
    
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" required>
    
                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category_ID') }}</label>
        
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required>
        
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
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