@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Post</h1>

        <ul>
            @foreach($posts as $post)
                <li><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>

    </div>
@endsection