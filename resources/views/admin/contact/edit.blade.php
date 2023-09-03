@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('ContactQuerie.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <form action="{{ route('ContactQuerie.update',$contact_edit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $contact_edit->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>email:</strong>
                        <input type="email" name="email" value="{{ $contact_edit->email }}" class="form-control" placeholder="email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subject</strong>
                        <input type="text" name="subject" value="{{ $contact_edit->subject }}" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Message</strong>
                        <input type="text" name="message" value="{{$contact_edit->message}}" class="form-control" placeholder="Message">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 m-2 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
