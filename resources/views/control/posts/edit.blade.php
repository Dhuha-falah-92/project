@extends('control.layouts.app')

@section('content')

<div class="card">
        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
                    
                    <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('posts.index') }}"> </a>Edit Post Details   </h2>

                </div>
            </div>
        
<div class="card-body">
    <form action="{{ route('categories.update',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $data->title }}" name="title"  required autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Content') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" value="{{ $data->content }}" name="content" required>

                    @if ($errors->has('content'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Category_ID') }}</label>

                    <div class="col-md-6">
                            <select class="form-control" name="category_id" id="Category">
                                    @foreach ($cate as $cat)
                                    <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                        
                                    @endforeach
                                  
                                </select>
                        
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-outline-success">
                                Submit
                            </button>
                        </div>
   
    </form>
</div>
</div>
@endsection