@extends('layouts.main')
@section('container')
<div class="container">
    <div class="contest-content mt-5" style="max-width: 1100px; padding-top:4rem; padding-bottom:7rem;">
    <div class="rows">
        <div class="question-problem">
            <p class="question">A. Menghitung Jumlah Bilangan Genap</p>
            <p class="author">By Fajry</p>
        </div>
        <div class="problem">
            <a href="#" class="choose">Choose a Problem</a>
            <br>or<br>
            <a href="#" class="create">Create a Problem</a>
        </div>
    </div>
    <div class="contest mt-3">
        <button class="button-create">
            <a href=" {{url("/contest")}}" class="btn-create">Create a contest</a>
        </button>
    </div>
    </div>
</div>
@endsection