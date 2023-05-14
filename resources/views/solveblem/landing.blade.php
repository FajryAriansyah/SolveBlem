<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solveblem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="black-container" style="background-color:#1A1A1B; clip-path: polygon(0 0, 100% 0, 100% 87%, 0% 100%);">
        <header class="header container" id="header">
            <nav class="nav">
                <a href="#" class="nav_brand" id="white-color">
                    Solveblem
                </a>
                <div class="nav_menu" id="nav-menu" style="z-index: 1000">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="{{url("solveblem")}}" class="nav_link active-link" id="white-color">Home</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/problem")}}" class="nav_link" id="white-color">Problem</a>
                        </li>
                        <li class="nav_item">
                            <a href="{{url("/contest")}}" class="nav_link" id="white-color">Ranking</a>
                        </li>
                        <li class="nav_item">
                            <a href="#" class="nav_link signup">Sign Up</a>
                        </li>
                        <li class="nav_item">
                            <a href="#" class="nav_link login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content-landing container">
            <h1 class="title-landing" style="color: white">
                Biarkan skillmu yang berbicara
            </h1>
            <button class="btn-mulai">
                <a href="{{ url('') }}" class="mulai-coding" style="color: white">Mulai Coding</a>
            </button>
            <div class="services-content" style="margin-top:3rem">
                <div class="landing-left-content">
                    <p style="color: white; margin-top:7rem; margin-bottom:1.5rem; padding-bottom:5rem">Membantu mengasah analisis dan problem solving mulai dari tahap pemula
                        hingga mahir</p>
                </div>
                <div class="landing-right-content">
                    <p style="color: white">Menyediakan lebih dari 300.000 soal untuk problem solving</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services-content" style="margin-top: 1rem">
            <div class="landing-left-content">
                <p style="color: black; margin-top: 5rem;">Membantu pengajar membuat dan memeriksa soal otomatis dengan local contest</p>
            </div>
            <div class="landing-right-content">
                <p style="color: black">Menyediakan local contest untuk siapa saja ingin berkompetisi lokal</p>
                <p style="color: black; margin-top:7.3rem; margin-bottom: 1rem;">Tersebar keseluruh Indonesia dan bisa diakses di mana saja</p>
            </div>
        </div>
    </div>
   
    <div class="black-container footer-landing py-1" style="background-color:#1A1A1B;  justify-content: center; clip-path: polygon(0 0, 100% 80%, 100% 100%, 0% 100%);">
        <footer class="footer" style="padding-top:3rem;">
            <p style="color: white; margin-top:.8rem">Copyright &copy; 2023 Solveblem</p>
        </footer>
    </div>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

