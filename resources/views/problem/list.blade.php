@extends('layouts.main')

@section('container')

<div class="container">
    <h1 class="title">Problem Set</h1>
</div>
<div class="container mt-3">
    <div class="content-list sidebar d-flex">
        <div class="main-content">
            @foreach ($posts as $post)
            <div class="content-card" onclick="window.location='{{ url('/problem/'.$post->slug) }}'">
                <p>{{ $post->id }} - {{ $post->judul }}</p>
                <div class="progressBar">
                    <div class="progress"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="side-content">
            <div class="category">
                <h1>Category</h1>
            </div>
            <div class="inner-category"></div>
        </div>
    </div>
</div>
@endsection