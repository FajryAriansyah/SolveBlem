@extends('layouts.main')
@section('container')
<div class="mx-40">
    <h1 class="font-bold text-[36px]">Create Contest</h1>
    <div class="container mx-auto px-6 mt-10 rounded-3xl py-5 mb-10 drop-shadow-2xl" style="font-family: 'Montserrat', sans-serif;background-color: #F7C873;">
        <form class="w-full px-20" action="/problem/create/store" method="POST">
            @csrf
            <br><span class="font-bold">Deskripsi Soal</span>
            <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Judul" style="width:100%;" placeholder="Judul"><br>
            <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Time_Limit" style="width:100%;" placeholder="Time Limit"><br>
            <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Memori_Limit" style="width:100%;" placeholder="Memori Limit"><br>
            <br><span class="font-bold">Deskripsi Masalah</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" rows="7" name="Deskripsi" style="width:100%;" placeholder="Deskripsi"></textarea><br>

            <br><span class="font-bold">Format Input</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format_Input" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Format Output</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format_Output" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Batasan</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Batasan" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Contoh Input</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Contoh_Input" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Contoh Output</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Contoh_Output" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Testcase Input</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Testcase_Input" style="width:100%;" placeholder="Format Input"></textarea><br>

            <br><span class="font-bold">Testcase Output</span>
            <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Testcase_Output" style="width:100%;" placeholder="Format Input"></textarea><br>

            <input class="border-2 border-black rounded-md bg-blue-600 text-white mt-5 px-5" type="submit" name="submit" value="Buat Soal">
        </form>
    </div>
</div>
@endsection