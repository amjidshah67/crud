@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Team </h2>
                    @if(session('success'))
                        <span class="text-danger">{{session('success')}}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('Teames.create') }}"> Create New Team</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Heading</th>
                <th>Title</th>
                <th>Descrition</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($teamData) > 0)
                @foreach( $teamData as $teamValue)
            <tr>
                <td>{{ $teamValue->id }}</td>
                <td><img src="{{ asset('uploads/'.$teamValue->image) }}" width="100px"></td>
                <td>{{ $teamValue->heading }}</td>
                <td>{{ $teamValue->title }}</td>
                <td>{{ $teamValue->description }}</td>
                <td>{{ $teamValue->status }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('Teames.show',$teamValue->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('Teames.edit',$teamValue->id) }}">Edit</a>
                    <form method="post" action="{{ route('Teames.destroy',$teamValue->id) }}">
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


