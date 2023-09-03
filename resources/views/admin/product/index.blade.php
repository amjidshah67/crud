@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Products </h2>
                    @if(session('success'))
                        <span class="text-danger">{{ session('success') }}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('productes.create') }}"> Create New Products</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Status</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
            @if( count($product) > 0 )
                @foreach( $product as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->status}}</td>
                <td><img src="{{ asset('uploads/'.$value->image) }}" width="100px"></td>

                <td>
                    <a class="btn btn-info" href="{{ route('productes.show',$value->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('productes.edit',$value->id) }}">Edit</a>
                    <form method="post" action="{{ route('productes.destroy',$value->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
                @endforeach
            @endif
        </table>

@endsection

