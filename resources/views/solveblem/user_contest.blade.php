@extends ('layouts.navigation')

@section('title', 'Solveblem | Contest')

@section('content')
<div class="container">
        <h1 class="title-contest">
            Contest
        </h1>

        <div class="contest-content">
            <div class="contest-rule">
                <p class="contest-text">Contest Name: </p>
                <p class="contest-text">Author Name: </p>
                <p class="contest-text">Start At: </p>
                <p class="contest-text">Duration: </p>
                <p class="contest-text">Max Participant: </p>
                <p class="contest-text">Password: </p>
            </div>
            <p class="text-problem">Problems</p>
            <div class="rows">
                <div class="question-problem">
                    <p class="question">A. Menghitung Jumlah Bilangan Genap</p>
                    <p class="author">By Fajry</p>
                </div>
                <div class="create-problem">
                    <a href="#" class="choose">Choose a Problem</a>
                    <br>or<br>
                    <a href="#" class="create">Create a Problem</a>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection