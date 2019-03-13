@extends('control.layouts.app')

@section('content')




<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

<div class="card">
        <div class="card-body">
            <h5 class="card-title">All Users</h5>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Last Update</th>
                            <th>Options</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $dataa)
                        <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $dataa->name}}</td>
                                <td>{{ $dataa->email}}</td>
                                <td>{{ $dataa->updated_at}}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ route('accountsmanagement.show',$dataa->id) }}">Show</a>
                                    {{-- <a class="btn btn-primary" href="{{ route('control.accountsmanagement.edit',$dataa->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['control.accountsmanagement.destroy', $dataa->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} --}}
                                </td>
                        </tr>
                        @endforeach
   
                       
                    </tbody>
                    <tfoot>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Last Update</th>
                                <th>Options</th>
                                
                        </tr>
                    </tfoot>
                </table>
            
            {!! $data->render() !!}
            </div>
        </div></div></div>






@endsection