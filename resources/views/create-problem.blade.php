<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SolveBlem | Contest</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="mx-40">


<h1 class="font-bold text-[36px]">Create Contest</h1>
<div class="container mx-auto px-6 mt-10 rounded-3xl py-5 mb-10 drop-shadow-2xl" style="font-family: 'Montserrat', sans-serif;background-color: #F7C873;">
    <form class="w-full px-20" action="user-contest/store" method="POST">
        @csrf
        <br><span class="font-bold">Deskripsi Soal</span>
        <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Nama" style="width:100%;" placeholder="Nama"><br>
        <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Time Limit" style="width:100%;" placeholder="Time Limit"><br>
        <input class="border-2 border-black rounded-lg px-5 mt-3" type="text" name="Memori Limit" style="width:100%;" placeholder="Memori Limit"><br>
        <br><span class="font-bold">Deskripsi Masalah</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" rows="7" name="Deskripsi" style="width:100%;" placeholder="Deskripsi"></textarea><br>
        <br><span class="font-bold">Format Input</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Format Output</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Batasan</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Contoh Input</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Contoh Output</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Testcase Input</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <br><span class="font-bold">Testcase Output</span>
        <textarea class="border-2 border-black rounded-lg px-5 mt-3" name="Format Input" style="width:100%;" placeholder="Format Input"></textarea><br>
        <input class="border-2 border-black rounded-md bg-blue-600 text-white mt-5 px-5" type="submit" name="submit" value="Buat Soal">
    </form>
</div>


</body>
</html>