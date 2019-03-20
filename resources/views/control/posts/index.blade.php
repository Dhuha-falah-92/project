@extends('control.layouts.app')

@section('content')



     
<div class="row">
        <div class="col-12">

<div class="card">

        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
                    <h2>Posts Management </h2>
                </div>
            </div>
    
    <div class="card-body">
       

        <div class="row">
        
                    
                
                    <div class="pull-right ">
                        <a class="btn btn-outline-primary" href="{{ route('posts.create') }}"> Create New Post</a>
                    </div>
                </div>
           
            <hr class="my-4">

        @if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif
        <div class="row">

        <div class="table-responsive">
            <table id="zero_config" class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                     
                        <th>Options</th>
                      
                    </tr>
                </thead>
                <tbody>
                        @foreach ($data as $dataa)
                    <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $dataa->title}}</td>
                            <td>{{ $dataa->category_id}}</td>
                        
                            <td>
                                <a class="btn btn-outline-info" href="{{ route('posts.show',$dataa->id) }}">Show</a>
                                <a class="btn btn-outline-success" href="{{ route('posts.edit',$dataa->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $dataa->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                    </tr>
                    @endforeach

                   
                </tbody>
                
            </table>
        
        {!! $data->render() !!}
        </div>
    </div></div>




@endsection