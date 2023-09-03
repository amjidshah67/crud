@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Categories</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <form action="{{ route('categories.update',$categorieItem->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" value="{{ $categorieItem->title }}" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        <input type="text" name="slug" value="{{ $categorieItem->slug }}" class="form-control" placeholder="slug">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product:</strong>
                        <input type="text" name="product" value="{{ $categorieItem->product }}" class="form-control" placeholder="Product">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="description" value="{{ $categorieItem->description }}" class="form-control" placeholder="description">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
