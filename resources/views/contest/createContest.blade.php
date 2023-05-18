@extends('layouts.main')
@section('container')
    <div class="container">
        <h1 class="title">Contest</h1>
    </div>
    <div class="form-contest">

        <div class="container">
            <div class="contest-content mt-3">

                <form action="{{ url('contest/store') }}" method="POST">
                    @csrf
                    <div class="inputForm-contest">
                        Contest Name : <input name="title" type="text" placeholder="Contest Name">
                    </div>
                    {{-- <div class="inputForm-contest">
                        Authors Name : <input name="user_name" type="text" placeholder="Authors Name"
                            value="{{ auth()->user()->username }}">
                    </div> --}}
                    <div class="inputForm-contest">
                        Start At : <input name="start_at" type="datetime-local" placeholder="Start At">
                    </div>
                    <div class="inputForm-contest">
                        Duration : <select name="duration" type="text" placeholder="in minute"> 
                            @for ($i = 1; $i < 300; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>   
                            @endfor
                        </select>
                        Minute
                        </div>
                        <div class="inputForm-contest">
                            Max Participant : <select name="max_participant" type="text" placeholder="Max Participant"> 
                                @for ($i = 1; $i < 300; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>   
                                @endfor
                            </select>
                            Person
                    </div>
                    <div class="inputForm-contest">
                        Password : <input name="password" type="password" placeholder="Password" id="myInput">
                    </div>
                    <input type="checkbox" name="checkbox" value="" class="mt-2" onclick="myFunction()"> Show Password<br>
                    <input name="slug" type="hidden" value="">
                    <input name="id" type="hidden" value="">
                    <input name="user_id" type="hidden" value="{{ auth()->id() }}">

                    <button type="submit" name="submit" class="contest btn-create btn-primary bg-primary p-2 mt-6"
                        style="border-radius: 20px">
                        Create a Contest
                    </button>
                </form>

                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
