@extends('layouts.admin')


@section('content')

<h1>Edit Post</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Replace Cover Image</label>
            <img width="400" src="{{asset('storage/' . $post->image)}}" alt="{{$post->image}}" class="d-block mt-3 mb-3">
            <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserte Title" aria-describedby="helpId" required value="{{$post->title}}">
            <small id="helpId" class="text-muted">Type a title with max 120 characters</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Inserte subtitle" aria-describedby="helpId" required value="{{$post->subtitle}}">
            <small id="helpId" class="text-muted">Type a subtitle with max 100 characters</small>
        </div>
        @error('subtitle')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="category_id">Choose category</label>
            <select name="category_id" id="category_id" class="form-control @error('subtitle') is-invalid @enderror">
                <option value="">Select a category</option>

                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ''}}> {{$category->name}}</option>
                @endforeach
            </select>
        </div>
        @error('category_id')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="tags">tags</label>
            <select multiple class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags">
                <option value="" disabled> Select a tag</option>

                @if($tags)
                @foreach($tags as $tag)
                @if($errors->any())
                <option value="{{$tag->id}}" {{ in_array($tag->id, old('tags')) ? 'selected' : '' }}> {{$tag->name}} </option>

                @else
                <option value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'selected' : '' }}>{{$tag->name}}</option>
                @endif
                @endforeach
                @endif

            </select>
        </div>
        @error('tags')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="body"></label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3" required">{{$post->body}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </form>
</div>
@endsection