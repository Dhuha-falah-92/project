@extends('control.layouts.app')

@section('content')

<div class="row">
        <div class="col-12">

<div class="card">
    

        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
                    <h2>Categories Management </h2>
                </div>
            </div>
        
    <div class="card-body">
       

        <div class="row">
                
                   
                    <div class="pull-right">
                        <a class="btn btn-outline-primary" href="{{ route('categories.create') }}"> Create New Category</a>
                        {{-- <a class="btn btn-outline-primary" href="{{ route ('posts.trashed') }}">  Post</a> --}}

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
                        <th>Name</th>
                        <th>Detals</th>
                       
                        <th>Options</th>
                      
                    </tr>
                </thead>
                <tbody>
                        @foreach ($data as $dataa)
                    <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $dataa->name}}</td>
                            <td>{{ $dataa->details}}</td>
                         
                            <td>
                                <a class="btn btn-outline-info" href="{{ route('categories.show',$dataa->id) }}">Show</a>

                                <a class="btn btn-outline-success" href="{{ route('categories.edit',$dataa->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $dataa->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                    </tr>
                    @endforeach

                   
                </tbody>
                
            </table>
        
        {{-- {!! $data->render() !!} --}}
        </div>
    </div></div>



@endsection