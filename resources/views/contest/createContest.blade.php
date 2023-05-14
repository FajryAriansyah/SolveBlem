@extends('layouts.main')
@section('container')
<div class="container">
    <h1 class="title">Contest</h1>
</div>
<div class="container">
    <div class="contest-content">
        <div class="form-contest" action="/contest/create" method="POST">
            <div class="inputForm-contest">
                Contest Name : <input name="title" type="text" placeholder="Contest Name">
            </div>
            <div class="inputForm-contest">
                Authors Name : <input name="user_id" type="text" placeholder="Authors Name">
            </div>
            <div class="inputForm-contest">
                Start At : <input name="start_at" type="text" placeholder="Start At">
            </div>
            <div class="inputForm-contest">
                Duration : <input name="duration" type="text" placeholder="Duration">
            </div>
            <div class="inputForm-contest">
                Max Participant : <input name="max_participant" type="text"
                    placeholder="Max Participant">
            </div>
            <div class="inputForm-contest">
                Password : <input name="password" type="text" placeholder="Password">
            </div>
        </div>
        <div class="contest">
            <button class="button-create">
                <a href="{{url("/contest/create/problem")}}" class="btn-create">Create a contest</a>
            </button>
        </div>
    </div>
</div>
@endsection