@extends('layouts.admin')

@section('content')

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img width="100" src="{{$post->image}}" alt="{{$post->title}}"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}">View</a>
                    | <a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                    |
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!-- <a href="#">Delete</a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

@endsection