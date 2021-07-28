@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Email</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card text-left my-4">
                <div class="card-body">
                    <h4 class="card-title">Mittente: {{$contact->name}}</h4>
                    <h5 class="card-subtitle mt-3 mb-3">Email: {{$contact->email}}</h5>
                    <h5 class="mt-4">Message:</h5>
                    <p class="card-text">{{$contact->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection