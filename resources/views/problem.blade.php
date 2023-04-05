<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Problem | SolveBlem</title>
  <link rel="stylesheet" href="css/style.css">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="css/stylee.css">
</head>
<body >
    <div class="content" >

        <h1 class="font-bold text-[28px] underline">
        Problem
        </h1>
        <span >Paket Latihan Pemrograman > C</span>
        <br><br>
        <div class="center">
            
            <h1 class="text-center font-bold text-[26px]" id="judul">Pak Dengklek dan Operasi Sederhana</h1>
            <div class="container atasan">
              <p id="time">Time Limit &emsp;&emsp;&emsp;    : 1 s</p>
              <p id="memory">Memory Limit&emsp;&emsp;: 64 MB</p>
            </div>
            <div class="container">
              <div class="font-bold">Deskripsi</div>
               <br>
              <p id="deskripsi">Pak Dengklek memutuskan sekolah lagi. Dia baru saja mendapat PR dari guru matematikanya. Sayangnya Pak Dengklek sudah terlalu lelah, dia sudah tak sanggup lagi. Pak Dengklek melihat potensi Anda yang begitu besar. Maka dari itu, kali ini dia minta bantuan Anda untuk menyelesaikan PR-nya. 

                Buatlah sebuah program yang membaca dua buah bilangan bulat X dan Y. X dan Y dijamin bukan nol. Tuliskan hasil penjumlahan, pengurangan, perkalian, bagian bulat pembagian dan sisanya.</p>
            </div>
            <div class="container">
              <div class="font-bold">
                Format Input <br>
              </div>
              <p id="f-input">Sebuah baris yang berisi dua buah bilangan bulat, X dan Y.</p>
            </div>
            <div class="container">
              <div class="font-bold">
                Format Output <br>
              </div>
              <p id="f-output">Lima buah baris, yakni :
                <br>
                Baris pertama berisi hasil penjumlahan, yakni X + Y
                <br>
                Baris kedua berisi hasil pengurangan, yakni X - Y
                <br>
                Baris ketiga berisi hasil perkalian, yakni X * Y
                <br>
                Baris keempat berisi bagian bulat hasil pembagian, yakni bagian bulat dari X / Y
                <br>
                Baris terakhir berisi X mod Y, yakni sisa pembagian dari X / Y</p>
            </div>
            <div class="container">
              <div class="font-bold">
                Contoh Input <br>
              </div>
              <p id="c-input">6 4</p>
            </div>
            <div class="container">
              <div class="font-bold">
                Contoh Output <br>
              </div>
              <p id="c-output">
                10
                <br>2
                <br>24
                <br>1
                <br>2
              </p>
            </div>
            <div class="container">
              <div class="font-bold">
                Submit
              </div>
              <div class="wrapper">
                  <span id="bahasa">Language</span> 
                  &emsp;&emsp;
                  <select class="border border-2 mb-3" name="bahasa" id="">
                      <option value="cpp">C++</option>
                      <option value="c">C</option>
                  </select>
                  <br>
                  <span>Source Code</span>
                  &emsp;<input type="file" id="sourceCode" name="sourceCode">
                  <br>
                  <button class="bg-blue-800  px-5 py-2 mt-5 text-white rounded-3xl border-1 border-black hover:bg-violet-600"
              onclick="window.location='{{ url("contest") }}'">
        Submit
      </button><br><br>
              </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
</body>
</html>