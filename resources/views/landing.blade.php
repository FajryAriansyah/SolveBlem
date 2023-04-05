<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SolveBlem</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body >
  <div class="text-white bg-zinc-800 h-screen flex flex-col items-center justify-center" style="font-family: 'Montserrat', sans-serif;">
    
      <span class="text-[36px] font-bold">Biarkan skillmu yang berbicara</span>
      <br>
      <input class="px-5 py-2 rounded text-center text-black" type="text" placeholder="Masukkan ID Contest" >
      <br><span>ATAU</span><br>
      <button class="bg-blue-800 px-5 py-2 rounded-lg border-1 border-black hover:bg-violet-600"
              onclick="window.location='{{ url("create-contest") }}'">
        Buat Contest
      </button><br><br>
      <p>SolveBlem membantu seluruh developer dunia untuk mengasah skill analisis dan problem solving mereka</p>
  </div>
</body>
</html>