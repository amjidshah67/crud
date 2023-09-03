@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Service</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('productes.index') }}"> Back</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productes.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug</strong>
                        <input type="text" name="slug" class="form-control" placeholder="Slug">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image</strong>
                            <input type="file" name="image" class="form-control" placeholder="Image">

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>status:</strong>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selecte>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
    </main>
@endsection
