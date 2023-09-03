@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>FAQS </h2>
                    @if(session('success'))
                        <span class="text-danger">{{session('success')}}</span>
                    @endif
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('faqes.create') }}"> Create New Faqs</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Question</th>
                <th>Answer</th>
                <th width="280px">Action</th>
            </tr>
            @if(count($faq) > 0)
                @foreach($faq as $dataFaq)
            <tr>
                <td>{{ $dataFaq->id }}</td>
                <td>{{ $dataFaq->question }}</td>
                <td>{{ $dataFaq->answer }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('faqes.show',$dataFaq->id) }}"> Show</a>
                    <a class="btn btn-primary" href="{{ route('faqes.edit',$dataFaq->id) }}">Edit</a>
                    <form method="post" action="{{ route('faqes.destroy',$dataFaq->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
                @endforeach
            @endif
        </table>

@endsection

