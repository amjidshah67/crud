@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Categories </h2>
                    @if(session('success'))
                        <span class="text-danger">{{ session('success') }}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Categories</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Product</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            @if( count($categorie) > 0)
                @foreach($categorie as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->product }}</td>
                <td>{{ $value->description }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('categories.show',$value->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$value->id) }}">Edit</a>
                    <form method="post" action="{{ route('categories.destroy',$value->id) }}">
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

