@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-left my-4">
                <img class="card-img-top" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <h5 class="card-subtitle">{{$post->subtitle}}</h5>
                    <h5 class="card-subtitle ">Category: </h5>
                    <div class="tags">
                        Tags:

                        @forelse($post->tags as $tag)
                        <span>{{$tag->name}}</span>
                        @empty
                        <span>no tags yet</span>

                        @endforelse
                    </div>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection