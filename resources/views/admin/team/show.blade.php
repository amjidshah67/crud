@extends('admin.layout.app')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Team</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Teames.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="{{ asset('uploads/'.$data_show->image) }}" width="100px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Heading:</strong>
                    {{ $data_show->heading }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title:</strong>
                    {{ $data_show->title }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $data_show->description }}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {{ $data_show->status }}
                    </div>
            </div>
        </div>
    </main>
@endsection
