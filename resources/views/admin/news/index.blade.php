@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>News Letters </h2>
                    @if( session('success'))
                        <span class="text-danger">{{ session('success') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($news)>0)
                @foreach( $news as $news_letter)
            <tr>
                <td>{{ $news_letter->id }}</td>
                <td>{{ $news_letter->email }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('NewsLetter.show',$news_letter->id) }}"> Show</a>
                    <form method="post" action="{{ route('NewsLetter.destroy',$news_letter->id) }}">
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

