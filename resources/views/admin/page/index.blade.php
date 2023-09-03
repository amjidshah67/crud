@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Pages </h2>
                    @if(session('success'))
                        <span class="text-danger">{{session('success')}}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('pages.create') }}"> Create New Pages user</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Contents</th>
                <th width="280px">Action</th>
            </tr>
                    @if(count($data) > 0)
                        @foreach ($data as $pageData)
            <tr>
                <td>{{ $pageData -> id }}</td>
                <td>{{ $pageData -> title }}</td>
                <td>{{ $pageData -> contents }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('pages.show',$pageData->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('pages.edit',$pageData->id) }}">Edit</a>
                    <form method="post" action="{{ route('pages.destroy',$pageData->id) }}">
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

