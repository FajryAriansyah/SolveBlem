<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solveblem | About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="about-black-container">
        <header class="header container" id="header">
            <nav class="nav">
                <a href="{{url("solveblem")}}" class="nav_brand" id="white-color">
                    Solveblem
                </a>
                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="{{url("solveblem")}}" class="nav_link active-link" id="white-color">Home</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/problem")}}" class="nav_link" id="white-color">Problem</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/contest")}}" class="nav_link" id="white-color">Contest</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/about")}}" class="nav_link" id="white-color">About</a>
                        </li>
                        @auth
                        <li class="nav_item dropdown">
                            <a href="#" class="nav_image nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/"><i
                                            class="bi bi-layout-text-sidebar-reverse"></i>My
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav_item">
                            <a href="{{url("/register")}}" class="nav_link signup-navbar">Sign Up</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/login")}}" class="nav_link login-navbar">Login</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container about-containt mt-3 mb-5">
            <p>
                SolveBlem adalah website pelatihan skill coding dan problem solving yang terbuka untuk umum. SolveBlem
                diambil dari kata Solve the Problem yang berarti "Selesaikan Masalah". Masalah disini merujuk ke coding
                problem. Website ini akan melatih analisis algoritma dan skill problem solving seseorang.
            </p>
            <p>
                Untuk menggunakan website ini, seorang user dapat membuat akun dan masuk langsung ke website. Setelah
                itu
                user tersebut dapat langsung mencari soal yang ingin ia pecahkan. Untuk setiap soal akan diberikan poin
                sesuai dengan selesai atau tidaknya soal tersebut dipecahkan. Terdapat beberapa kategori soal yang telah
                dipecahkan yaitu :
                <br>
                AC (Accepted),
                <br>
                WA (Wrong Answer),
                <br>
                TLE (Time limit Exceed),
                <br>
                RTE (Runtime Error)
                <br>
                CTE (Compile time Error) </p>
            <p>Website ini berisi soal-soal codingan dengan bahasa indonesia. Bahasa yang dipakai bisa C, C++ dan Java.
            </p>
            <p>Salah satu fitur yang ditawarkan adalah membuat grup dan soal sendiri. seorang pengajar dapat membuat
                grup
                untuk murid-muridnya dan membuat soal sendiri untuk dikerjakan oleh grup. fitur ini cocok digunakan
                sebagai
                tempat latihan atau tugas para murid karena code para murid akan otomatis diperiksa oleh sistem tanpa
                perlu
                effort dari pengajar.
                Untuk membuat soal terdapat 3 hal yang harus dipenuhi :
                <br>
                1. Deskripsi Soal
                <br>
                2. Batasan jawaban
                <br>
                3. Test Case dan Contoh Test Case
            </p>
        </div>
    </div>
    <div class="footer-landing" style="justify-content: center;">
        <footer class="footer">
            <p style="color: black;">Copyright &copy; 2023 Solveblem</p>
        </footer>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>