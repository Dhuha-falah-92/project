@extends('control.layouts.app')

@section('content')



     
<div class="row">
        <div class="col-12">

<div class="card">

        <div class="card-header">{{ __(' ') }}
                <div class="pull-left">
                    <h2> <a class="mdi mdi-arrow-left-bold-circle-outline" href="{{ route('posts.index') }}"> </a>Posts deleted </h2>
                </div>
            </div>
    
    
    </div>
    <div class="table-responsive">
                <table id="zero_config" class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>content</th>
                           
                            <th>Options</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($d as $dataa)
                        <tr>
                                {{-- <td>{{ ++$i }}</td> --}}
                                <td>{{ $dataa->title}}</td>
                                <td>
                        <img src="{{ $dataa->content}}" alt="hello" class="img-thumbnail" height="100" width="100">
                                </td>
                                <td>{{ $dataa->category_id}}</td>
                            
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('softdelete.show',$dataa->id) }}">Restore</a>

                                    {!! Form::open(['method' => 'DELETE','route' => ['softdelete.destroy', $dataa->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                                </td>
                        </tr>
                        @endforeach
    
                       
                    </tbody>
                    
                </table>
            
            {{-- {!! $d->render() !!} --}}
            </div>



@endsection