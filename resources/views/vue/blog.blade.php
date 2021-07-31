@extends('layouts.app')


@section('content')

<div class="jumbotron text-center">
    <h1>VUE Blog</h1>
</div>

<div class="container d-flex flex-wrap">
    <div class="card text-left" v-for="post in posts">
        <img class="card-img-top" :src="'storage/' + post.image" alt="">
        <div class="card-body">
            <h4 class="card-title">@{{post.title}}</h4>
            <h3 class="card-subtitle">@{{post.subtitle}}</h3>
            <p class="card-text">@{{post.body}}</p>
        </div>
    </div>

</div>


@endsection