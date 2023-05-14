@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="content sidebar d-flex">
            <div class="main-content">
                <div class="h2">
                    Problems List
                </div>
        
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
                    <p>side</p>
                </div>
            </div>
        </div>
    </div>
@endsection