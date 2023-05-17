@extends('layouts.main')
@section('container')

<div class="container">
    <h1 class="title">Contest</h1>
</div>

<div class="container container-contest">
    <div class="enter-contest">
        <div class="enter-contest-wrap">
            <p class="text-id">Enter Contest</p>
            <input class="form-control" type="text" aria-label="default input example"
                style="background-color: #D9D9D9; border: 1px solid black; border-radius: 15px;" placeholder="ID">
            <input class="form-control mt-2" type="text" aria-label="default input example"
                style="background-color: #D9D9D9; border: 1px solid black; border-radius: 15px;" placeholder="Password">
            <button class="button-enter">
                <a href="{{url("/contest/participant")}}" class="btn-enter">Enter</a>
            </button>
            <p class="text-or">or</p>
            <p class="text-contest">Make your local contest</p>
            <button class="button-create">
                <a href="{{url("/contest/create")}}" class="btn-create">Create a contest</a>
            </button>
        </div>
    </div>
</div>
@endsection