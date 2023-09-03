@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Skills</h2>
                    @if(session('success'))
                        <span class="text-danger">{{session('success')}}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('skilles.create') }}"> Create New skill</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Language</th>
                <th>Progress</th>
                <th width="280px">Action</th>
            </tr>
            @if(count( $skill) > 0 )
                @foreach($skill as $skillsData)
            <tr>
                <td>{{ $skillsData->id }}</td>
                <td>{{ $skillsData->language }}</td>
                <td>{{ $skillsData->progress }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('skilles.show',$skillsData->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('skilles.edit',$skillsData->id) }}">Edit</a>
                    <form method="post" action="{{ route('skilles.destroy',$skillsData->id) }}">
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

