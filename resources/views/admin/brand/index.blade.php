@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Brands </h2>
                </div>
                @if(session('success'))
                    <span class="text-danger">{{session('success')}}</span>
                @endif
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('brands.create') }}"> Create New Brands</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">

            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($brands) > 0)
                @foreach( $brands as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->title}}</td>
                <td>
                    <img src="{{ asset('uploads/'.$item->image) }}" width="100px">
                </td>
                <td>{{ $item->status}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('brands.show',$item->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('brands.edit',$item->id) }}">Edit</a>
                    <form method="post" action="{{ route('brands.destroy',$item->id) }}">
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

