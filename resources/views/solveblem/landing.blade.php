<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solveblem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ asset('images/Solveblem.png') }}" type="image/x-icon">
</head>

<body>
    <div class="black-container" style="background-color:#1A1A1B; clip-path: polygon(0 0, 100% 0, 100% 87%, 0% 100%);">
        header class="header" id="header">
        <nav class="nav mx-5 ">
            <a href="{{ url('solveblem') }}" class="nav_brand" id="white-color">
                Solveblem
            </a>
            <div class="nav_menu " id="nav-menu" style="z-index: 1000">
                <ul class="nav_list d-flex justify-content-center align-items-center">
                    <li class="nav_item">
                        <a href="{{ url('/') }}" class="nav_link active-link" id="white-color">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('/problem') }}" class="nav_link" id="white-color">Problem</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('/contest') }}" class="nav_link" id="white-color">Contest</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('/about') }}" class="nav_link" id="white-color">About</a>
                    </li>
                    @auth
                        <li class="navbar-item mx-4">
    
                            <i class="bi bi-person-circle  btnDropdownIcon "  onclick="toggle_dropdown_icon()"
                                style="width:2rem; color:white;"></i>
    
                            <div class="wrapper">
                                
                                <div class="drop-down bg-light py-2" style="width:20px; border-bottom:2px 2px 2px rgba(0, 0, 0, 0.25)" id="dropdownIcon">
                                    
                                    <form action="/profiles/{{ auth()->user()->username }}" method="GET">
                                    <button onclick="window.location.href = {{ url('profiles'.auth()->user()->username) }}" class="dropdown-item">
                                        <i class="bi bi-layout-text-sidebar-reverse"></i>Profile</button>
                                    </form>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i>Logout</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="nav_item">
                            <a class="nav_link login-navbar" style="border-radius:20px" href="/login">
                                Login
                            </a>
                        </li>
                        <li class="nav_item">
                            <a class="nav_link signup-navbar" style="border-radius:20px" href="/register">
                                Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    
    <script>
         // tutup boila di click di luar
         window.onclick = function(e){
            if(!e.target.matches('.btnDropdown')){
                var myDropdown = document.getElementById("dropdown");
                if(myDropdown.classList.contains('show')){
                    myDropdown.classList.remove('show')
                }
            }
            if(!e.target.matches('.btnDropdownIcon')){
                var myDropdown = document.getElementById("dropdownIcon");
                if(myDropdown.classList.contains('show')){
                    myDropdown.classList.remove('show')
                }
            }
        }
        function toggle_dropdown_icon(){
            document.getElementById('dropdownIcon').classList.toggle('show');
        }
    
    </script>
        <div class="content-landing container">
            <h1 class="title-landing" style="color: white">
                Biarkan skillmu yang berbicara
            </h1>
            <button class="btn-mulai">
                <a href="{{ url('/buka/visual') }}" class="mulai-coding" style="color: white">Mulai Coding</a>
            </button>
            <div class="services-content" style="margin-top:3rem;">
                <div class="landing-left-content landing-left-content-one">
                    <p style="padding-bottom:5rem;margin-top:7rem;color: white;">Membantu mengasah analisis dan problem solving mulai dari tahap pemula
                        hingga mahir</p>
                </div>
                <div class="landing-right-content" style="border-left: 1px solid white;">
                    <p style="color: white; padding-left: 1.5rem; padding-top:1.3rem;">Menyediakan lebih dari 300.000 soal untuk problem solving</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services-content">
            <div class="landing-left-content landing-left-content-two">
                <p style="color: black; margin-top: 5rem;">Membantu pengajar membuat dan memeriksa soal otomatis dengan local contest</p>
            </div>
            <div class="landing-right-content">
                <p style="color: black; padding-left: 1.5rem;">Menyediakan local contest untuk siapa saja ingin berkompetisi lokal</p>
                <p style="color: black; margin-top:7.3rem; margin-bottom: 1rem; padding-left: 1.5rem;">Tersebar keseluruh Indonesia dan bisa diakses di mana saja</p>
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