@extends('admin.layout.app')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Products</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('productes.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title:</strong>
                    {{ $products->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status:</strong>
                    {{ $products->status }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>
                    <img src="{{ asset('uploads/'.$products->image) }}" width="100px">

                </div>

            </div>
        </div>
    </main>
@endsection
