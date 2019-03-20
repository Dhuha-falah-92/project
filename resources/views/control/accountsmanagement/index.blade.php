@extends('control.layouts.app')

@section('content')





     
        <div class="row">
            <div class="col-12">

<div class="card">
        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
                    <h2>Users Account Management </h2>
                </div>
            </div>
    
        <div class="card-body">
           

            <div class="row">
                  
                        
                     
                        <div class="pull-right">
                            <a class="btn btn-outline-primary" href="{{ route('accountsmanagement.create') }}"> Create New User</a>
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
                <table id="zero_config" class="table  table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                         
                            <th>Options</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $dataa)
                        <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $dataa->name}}</td>
                                <td>{{ $dataa->email}}</td>
                            
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('accountsmanagement.show',$dataa->id) }}">Show</a>
                                    <a class="btn btn-outline-success" href="{{ route('accountsmanagement.edit',$dataa->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['accountsmanagement.destroy', $dataa->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                        </tr>
                        @endforeach
   
                       
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Options</th>
                                
                        </tr>
                    </tfoot> --}}
                </table>
            
            {!! $data->render() !!}
            </div>
        </div></div>






@endsection