@extends('layouts.admin')


@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Replace Cover Image</label>
            <img width="400" src="{{asset('storage/' . $post->image)}}" alt="{{$post->image}}" class="d-block mt-3 mb-3">
            <input type="file" name="image" id="image">
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserte Title" aria-describedby="helpId" required value="{{$post->title}}">
            <small id="helpId" class="text-muted">Type a title with max 120 characters</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Inserte subtitle" aria-describedby="helpId" required value="{{$post->subtitle}}">
            <small id="helpId" class="text-muted">Type a subtitle with max 100 characters</small>
        </div>
        @error('subtitle')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="body"></label>
            <textarea class="form-control" name="body" id="body" rows="3" required">{{$post->body}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </form>
</div>
@endsection