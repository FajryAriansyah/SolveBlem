@extends('layouts.main')
@section('container')


{{-- {{ dd(auth()->user()->id) }} --}}

<div class="container">
    @php
        $urutan = 1
    @endphp
    <div class="contest-content mt-5" style="max-width: 1100px; padding-top:4rem; padding-bottom:7rem;">
    <div class="rows">
        
        @if($problems->count())
            @foreach($problems as $problem)
                <div class="question-problem">
                    
                    <p class="question">{{ $urutan++ .'. ' .$problem->judul }}</p>
                    <p class="author">By {{ $problem->user->name }}</p>
                </div>
            @endforeach
        @endif
        <div class="problem">
            <a href="{{ url('/contest/'. $contest->slug .'/create/problem/select') }}" class="choose">Choose a Problem</a>
            <br>or<br>
            <a href="{{ url('/contest/'. $contest->slug .'/create/problem/create') }}" class="create">Create a Problem</a>
        </div>
    </div>
    <div class="contest mt-3">
        <button class="button-create">
            <a href=" {{url("/contest/".$contest->slug)}}" class="btn-create">Create a contest</a>
        </button>
    </div>
    </div>
</div>
@endsection