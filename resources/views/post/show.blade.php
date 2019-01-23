@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

        <section class="comments">
            <comment-component></comment-component>
        </section>

    </div>
@endsection

@section('before_script')
    {!! \Comment::config('Post', $post->id) !!}
@endsection