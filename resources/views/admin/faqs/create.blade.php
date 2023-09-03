@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Faqs</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('faqes.index') }}"> Back</a>
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

        <form action="{{ route('faqes.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Question:</strong>
                        <input type="text" name="question" class="form-control" placeholder="question">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Answer:</strong>
                        <input type="text" name="answer" class="form-control" placeholder="answer">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary m-3">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
