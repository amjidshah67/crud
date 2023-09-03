@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Pakeges </h2>
                    @if(session('success'))
                        <span class="text-danger">{{ session('success') }}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('Pakages.create') }}"> Create New Pakage</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Heading</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th width="200px">Action</th>
            </tr>
            @if( count($pakage) > 0 )
                @foreach( $pakage as $pakage_value )
            <tr>
                <td>{{ $pakage_value->id }}</td>
                <td>{{ $pakage_value->heading }}</td>
                <td>{{ $pakage_value->title }}</td>
                <td>{{ $pakage_value->description }}</td>
                <td>{{ $pakage_value->status }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route( 'Pakages.show',$pakage_value->id )}}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('Pakages.edit',$pakage_value->id) }}">Edit</a>
                    <form method="post" action="{{ route('Pakages.destroy',$pakage_value->id) }}">
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

