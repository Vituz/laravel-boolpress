@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Contacts Us</h1>

    <form action="{{route('contacts.send')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name Surname" aria-describedby="nameHelper" minlength="3" maxlength="100" required value="{{old('name')}}">
            <small id="nameHelper" class="text-muted">Type here your full name</small>
        </div>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="example@example.com" required value="{{old('email')}}">
            <small id="emailHelpId" class="form-text text-muted">Type here you email address</small>
        </div>
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="body">Message</label>
            <textarea class="form-control" name="body" id="body" rows="5">{{old('body')}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary btn-block">Send</button>
    </form>

</div>

@endsection