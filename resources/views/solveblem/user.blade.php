@extends ('layouts.navigation')


@section('title', 'Solveblem | User')



@section('content')
@include('layouts.profile')

<div class="wrap">
        <div class="title">
            <h1>Profile</h1>
        </div>
        <div class="inner-wrap rows balance">
            <div class="user-profile">
                <img src="{{asset ('images/users.png')}}" alt="user" width="130px" height="130px">
                <p class="text-user">User</p>
            </div>
            <div class="user-bio">
                <p>Nama </p>
                <p>Rating </p>
            </div>
        </div>
        <div class="title">
            <h1>Problem Statistics</h1>
        </div>
        <div class="inner-wrap statistics">
            <p class="text-scores">Total Problem Scores</p>
            <p class="text-attempted">Total Problems Attempted</p>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection