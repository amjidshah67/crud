@extends('admin.layout.app')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show News Letter</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('NewsLetter.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $news_show->email }}
                </div>
            </div>
            </div>
        </div>
    </main>
@endsection
