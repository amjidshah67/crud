@extends('admin.layout.app')
@section('content')
    <main id="main" class="main">
        <p class="text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Contact Queries </h2>
                    @if(session('success'))
                        <span class="text-danger">{{session('success')}}</span>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <table class="table border table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th width="200px">Action</th>
            </tr>
            @if(count($contact)>0)
                @foreach($contact as $contact_item)
                    <tr>
                        <td>{{ $contact_item->id }}</td>
                        <td>{{ $contact_item->name }}</td>
                        <td>{{ $contact_item->email }}</td>
                        <td>{{ $contact_item->subject }}</td>
                        <td>{{ $contact_item->message }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('ContactQuerie.show',$contact_item->id) }}"> Show</a>
                            {{--                    <a class="btn btn-primary" href="{{ route('ContactQuerie.edit',$contact_item->id) }}">Edit</a>--}}
                            <form method="post" action="{{ route('ContactQuerie.destroy',$contact_item->id) }}">
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

