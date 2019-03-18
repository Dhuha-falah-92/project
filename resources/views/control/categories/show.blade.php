@extends('control.layouts.app')

@section('content')

<div class="container-fluid">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Categories</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-dark" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>



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
            <th scope="col">Detials  
                <td>{{ $data->details}}</td></th>
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
</div>




@endsection