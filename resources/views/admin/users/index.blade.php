@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Users </h2>
                </div>
                @if(session('success'))
                    <span class="text-danger">{{session('success')}}</span>
                @endif
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($records) > 0)
                @foreach ($records as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"> Show</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            <form method="post" action="{{ route('users.destroy',$user->id) }}">
                                @csrf
                                @method("DELETE")
                            <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>

@endsection
