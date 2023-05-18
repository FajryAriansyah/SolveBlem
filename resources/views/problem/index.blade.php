@extends('layouts.main')
@section('container')
    <div class="content">
        <h1 class="font-bold text-[28px] underline">
            Problem
        </h1>
        <span>Paket Latihan Pemrograman > C</span>
        <br><br>
        <div class="container-center">

            <h1 class="text-center font-bold text-[26px]" id="judul">{{ $problem->judul }}</h1>
            <br>
            <div class="container-item atasan">
                <p id="time">Time Limit &emsp;&emsp;&emsp; : {{ $problem->batas_waktu }}</p>
                <p id="memory">Memory Limit&emsp;&emsp;: {{ $problem->batas_memori }}</p>
            </div>
            <div class="container-item">
                <div class="font-bold p">Deskripsi</div>

                <p id="deskripsi">{!! $problem->deskripsi !!}</p>
            </div>
            <div class="container-item">
                <div class="font-bold">
                    Format Input <br>
                </div>
                <p id="f-input">{!! $problem->format_input !!}</p>
            </div>
            <div class="container-item">
                <div class="font-bold">
                    Format Output <br>
                </div>
                <p id="f-output">{!! $problem->format_output !!}</p>
            </div>
            <div class="container-item">
                <div class="font-bold">
                    Contoh Input <br>
                </div>
                <p id="c-input">{!! $problem->contoh_input !!}</p>
            </div>
            <div class="container-item">
                <div class="font-bold">
                    Contoh Output <br>
                </div>
                <p id="c-output">
                    {!! $problem->contoh_output !!}
                </p>
            </div>
            <div class="container-item">
                <div class="font-bold">
                    Submit
                </div>
                <div class="wrapper">
                    @if(isset($contest))
                    <form action="{{ url('/contest/' . $contest->slug.'/'.$problem->slug . '/store') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <form action="{{ url('/contest/'.$problem->slug . '/store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                        <span id="bahasa">Language</span>
                        &emsp;&emsp;
                        <select class="border border-2 mb-3" name="lang" id="">
                            <option value="cpp">C++</option>
                            <option value="c">C</option>
                        </select>
                        <br>
                        @csrf
                        <span>Source Code</span>
                        &emsp;
                        <input type="file" name="sourceCode">
                        <br>
                        <button
                            class="bg-blue-800  px-5 py-2 mt-5 text-white rounded-3xl border-1 border-black hover:bg-violet-600"
                            type="submit">
                            Submit
                        </button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
@endsection
