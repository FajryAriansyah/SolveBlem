<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SolveBlem</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylee.css">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="content">
    <h1 class="font-bold text-[28px] underline" >Contest</h1>
    <div class="form">
        <div class="inputForm">Contest Name : <input type="text" placeholder="Contest Name"></div><br>
        <div class="inputForm">Authors Name : <input type="text" placeholder="Authors Name"></div><br>
        <div class="inputForm">Start At : <input type="text" placeholder="Start At"></div><br>
        <div class="inputForm">Duration : <input type="text" placeholder="Duration"></div><br>
        <div class="inputForm">Max Participant : <input type="text" placeholder="Max Participant"></div><br>
        <div class="inputForm">Password : <input type="text" placeholder="Password"></div><br>
        <br>
        Problems
        <br><br>
        <div class="card">
            <span onclick="window.location='{{ url("create-contest") }}'">Create a Problem</span>
        </div>
        <br><br>
        <button class="bg-blue-800 px-5 py-2 rounded-lg border-1 border-black hover:bg-violet-600 text-white"
              onclick="window.location='{{ url("create-contest") }}'">
        Buat Contest
      </button><br><br>
    </div>
</div>
</body>
</html>