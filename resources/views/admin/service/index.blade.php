@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Services </h2>
                </div>
                @if(session('success'))
                    <span class="text-danger">{{session('success')}}</span>
                @endif
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('services.create') }}"> Create New Service</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>title</th>
                <th width="280px">description</th>
            </tr>
            @if(count($data) > 0)
                @foreach ($data as $value)

                <tr>
                    <td>{{ $value->id}}</td>
                    <td>{{ $value->title}}</td>
                    <td>{{ $value->description}}</td>

                    <td>
                            <a class="btn btn-info" href="{{ route('services.show',$value->id) }}"> Show</a>
                            <a class="btn btn-primary" href="{{ route('services.edit',$value->id) }}">Edit</a>
                            <form method="post" action="{{ route('services.destroy',$value->id) }}">
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
