@extends('layouts.admin')

@section('content')

<div class="container">

    <section class="d-flex justify-content-md-between">
        <h1>Posts List</h1>
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary m-4"><i class="fas fa-plus mr-2"></i>New Post</a>
    </section>

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
                <td><img width="100" src="{{asset('storage/' . $post->image)}}" alt="{{$post->title}}"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->body}}</td>
                <td class="d-flex">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary m-1"><i class="far fa-eye"></i></a>
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary m-1"><i class="fas fa-pencil-alt"></i></a>

                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger m-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mx-auto" style="width: 200px;">
        {{ $posts->links() }}
    </div>

</div>

@endsection