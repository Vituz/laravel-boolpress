@extends('layouts.admin')


@section('content')
<h1>Create new Post</h1>

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
            <label for="category_id">Chose category</label>
            <select name="category_id" id="category_id" class="form-control" value="{{old('category_id')}}">
                <option>Select a category</option>

                @foreach($categories as $category)
                <option value=" {{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">tags</label>
            <select multiple class="form-control" name="tags[]" id="tags">
                <option value="" disabled> Select a tag</option>

                @if($tags)
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                @endif

            </select>
        </div>


        <div class="form-group">
            <label for="body"></label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3" required>{{old('body')}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

    </form>

</div>
@endsection