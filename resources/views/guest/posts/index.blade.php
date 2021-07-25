@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12">
            <a href="{{route('posts.show', $post->id)}}">
                <div class="card text-left my-4">
                    <img class="card-img-top" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <h5 class="card-subtitle">{{$post->subtitle}}</h5>
                        <p class="card-text">{{$post->body}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>



@endsection