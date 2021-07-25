@extends('layouts.admin')


@section('content')
<h1>Create new Post</h1>

<div class="container">

    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="image">Cover Image</label>
            <input type="file" name="image" id="image" aria-describedby="imageHelp">
            <small id="imageHelp" class="text-muted">Choose cover image</small>
        </div>
        @error('image')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserte Title" aria-describedby="titleHelp" required value="{{old('title')}}">
            <small id=" titleHelp" class="text-muted">Type a title with max 120 characters</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Inserte subtitle" aria-describedby="subtitleHelp" required value="{{old('subtitle')}}">
            <small id=" subtitleHelp" class="text-muted">Type a subtitle with max 100 characters</small>
        </div>
        @error('subtitle')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="body"></label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3" required>{{old('image')}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </form>

</div>
@endsection