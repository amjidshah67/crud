@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('NewsLetter.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <form action="{{ route('NewsLetter.update',$news_edit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" value="{{ $news_edit->title }}" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="description" value="{{ $news_edit->Description }}" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 m-2 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
