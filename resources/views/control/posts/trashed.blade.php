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
                        <th>content</th>
                        <th>Category</th>
                        <th>Options</th>
                      
                    </tr>
                </thead>
                <tbody>
                        @foreach ($d as $dataa)
                    <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $dataa->title}}</td>
                            <td>
                    <img src="{{ $dataa->content}}" alt="hello" class="img-thumbnail" height="100" width="100">
                            </td>
                            <td>{{ $dataa->category_id}}</td>
                        
                            <td>
                          
                              
                            </td>
                    </tr>
                    @endforeach

                   
                </tbody>
                
            </table>
        
        {{-- {!! $d->render() !!} --}}
        </div>
    </div></div>




@endsection