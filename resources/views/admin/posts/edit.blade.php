@extends('layouts.admin')


@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Inserte image url here" aria-describedby="helpId" required value="{{$post->image}}">
            <small id="helpId" class="text-muted">Copy and paste image url here</small>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserte Title" aria-describedby="helpId" required value="{{$post->title}}">
            <small id="helpId" class="text-muted">Type a title with max 120 characters</small>
        </div>

        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Inserte subtitle" aria-describedby="helpId" required value="{{$post->subtitle}}">
            <small id="helpId" class="text-muted">Type a subtitle with max 100 characters</small>
        </div>

        <div class="form-group">
            <label for="body"></label>
            <textarea class="form-control" name="body" id="body" rows="3" required">{{$post->body}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </form>
</div>
@endsection