@extends('control.layouts.app')

@section('content')

<div class="container-fluid">

                <div class="card">
        
                        <div class="card-header">{{ __(' ') }}
                                <div class="pull-left">
                                        
                                    <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('accountsmanagement.index') }}"> </a> Show User Details  </h2>
                                </div>
                            </div>
                    
                    <div class="card-body">











    <table class="table table-striped table-dark">
        
            <tbody>
            
        <tr>
            <th scope="row">ID
                <td>{{ $data->id}}</td>
            </th> 
        </tr>
        <tr>
            <th scope="col">Name  
                <td>{{ $data->name}}</td>
            </th>
        </tr>
        <tr>
            <th scope="col">Email  
                <td>{{ $data->email}}</td></th>
        </tr>
        <tr>
            <th scope="col">Cearted  
                <td>{{ $data->created_at}}</td>
            </th>
        </tr>
        <tr>
                <th scope="col">Updated  
                    <td>{{ $data->updated_at}}</td>
                </th>
            </tr>
     
          
        </tbody>
      </table>
</div></div>




@endsection