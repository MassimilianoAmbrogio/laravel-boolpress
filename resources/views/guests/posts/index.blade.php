@extends('layouts.app')

@section('content')
<div class="container">
    <h1>BLOG</h1>

    @if ($posts->isEmpty())
        <p>No post has been created yet</p>
    @else
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>{{ $post->title }}</h2>
                <div class="info">
                    By {{ $post->user->name }}
                    <div class="date">{{ $post->updated_at->diffForHumans() }}</div>
                </div>
                <a href="{{ route('posts.show', $post->slug) }}">Read More</a>
            </article>
        @endforeach
    @endif   

</div>
@endsection