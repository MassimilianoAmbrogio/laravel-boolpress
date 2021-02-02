@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>

    <div class="text">{{ $post->body }}</div>
</div>
@endsection