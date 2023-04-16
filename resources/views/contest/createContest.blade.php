@extends('layouts.main')
@section('container')
    <div class="content">
        <h1 class="font-bold text-[28px] underline">Contest</h1>
        <form class="form" action="/contest/store" method="POST">
            @csrf
            <div class="inputForm">Contest Name : <input name="title" type="text" placeholder="Contest Name"></div><br>
            <div class="inputForm">Authors Name : <input name="user_id" type="text" placeholder="Authors Name"></div><br>
            <div class="inputForm">Start At : <input name="start_at" type="datetime-local" placeholder="Start At"></div><br>
            <div class="inputForm">Duration : <input name="duration" type="text" placeholder="Duration"></div><br>
            <div class="inputForm">Max Participant : <input name="max_participant" type="text"
                    placeholder="Max Participant"></div><br>
            <div class="inputForm">Password : <input name="password" type="text" placeholder="Password"></div><br>
            <input name="slug" type="hidden" value="">
            <input name="user_id" type="hidden" value="{{ auth()->id() }}">
            {{-- 
        Cara mendapatkan data dari Auth :
        1. $user = auth()->user(); echo $user->name;
        2. $user = Auth::user(); echo $user->name;
        3. $user_id = auth()->id(); echo $user_id;
        4. $user_id = Auth::user(); echo $user_id;
        5. if(auth()->check) UNTUK MEMERIKSA APAKAH ADA USER LOGIN
 --}}
            {{-- <br> --}}

            {{-- Problems
        <br><br>
        <div class="row gap-3">
           --}}
            {{-- @foreach ($problems as $problem)
          <div class="card col-md-4">
            <span>{{ $problem->judul }}</span>
          </div>
          @endforeach --}}
            {{-- <div class="card col-md-4">
              <span onclick="window.location='{{ url("/problem/create") }}'">Create a Problem</span>
          </div>
        </div> --}}
            <br><br>
            <button type="submit"
                class="bg-blue-800 px-5 py-2 rounded-lg border-1 border-black hover:bg-violet-600 text-white">
                Buat Contest
            </button><br><br>
        </form>
    </div>
@endsection
