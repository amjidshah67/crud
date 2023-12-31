@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Contact</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('ContactQuerie.index') }}"> Back</a>
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

        <form action="{{ route('ContactQuerie.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="email">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Subject:</strong>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Message</strong>
                        <input type="text" name="message" class="form-control" placeholder="Message">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 m-2 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
