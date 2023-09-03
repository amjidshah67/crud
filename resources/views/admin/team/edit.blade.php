@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Team</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Teames.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <form enctype="multipart/form-data" action="{{ route('Teames.update',$team_edit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control"/>
                        <input type="hidden" name="previous_image" value="{!! $team_edit->image !!}"/>
                        <img height="100" width="150" src="{!! asset('uploads/'.$team_edit->image) !!}"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Heading:</strong>
                        <input type="text" name="heading" value="{{ $team_edit->heading }}" class="form-control" placeholder="Heading">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" value="{{ $team_edit->title }}" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        <input type="text" name="slug" value="{{ $team_edit->slug }}" class="form-control" placeholder="Slug">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="description" value="{{ $team_edit->description }}" class="form-control" placeholder="description">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <select class="form-select" name="status" value="{{ $team_edit->status }} aria-label="Default select example" required>
                            <option selecte>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>

                <div class="col-xs-12 col-sm-12 col-md-12 m-2 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
