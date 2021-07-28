@extends('layouts.admin')

@section('content')

<div class="container">

    <section class="d-flex justify-content-md-between">
        <h1>Received Emails</h1>
    </section>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->body}}</td>
                <td class="d-flex">
                    <a href="{{route('admin.contacts.show', $contact->id)}}" class="btn btn-primary m-1"><i class="far fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mx-auto" style="width: 200px;">
        {{ $contacts->links() }}
    </div>

</div>

@endsection