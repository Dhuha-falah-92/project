@extends('control.layouts.app')

@section('content')

<div class="card">
        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
               
                    <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('categories.index') }}"> </a>Edit Category Information  </h2>

                    
                </div>
            </div>
        
<div class="card-body">
    <form action="{{ route('categories.update',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <input type="text" name="details" value="{{ $data->details }}" class="form-control" placeholder="Details">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
   
    </form>
</div>
</div>
@endsection