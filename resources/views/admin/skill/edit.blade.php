@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Skills</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('skilles.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <form action="{{ route('skilles.update',$item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Language:</strong>
                        <input type="text" name="language" value="{{ $item->language }}" class="form-control" placeholder="Language">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        <input type="text" name="slug" value="{{ $item->slug }}" class="form-control" placeholder="slug">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Progress:</strong>
                        <input type="number" name="progress" value="{{ $item->progress }}" class="form-control" placeholder="Progress">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
