{{-- <div class="nav ">
        <a href="#" class="nav_brand">
            Solveblem
        </a>
        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
                <li class="nav_item">
                    <a href="/" class="nav_link active-link">Home</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/problem') }}" class="nav_link">Problem</a>
                </li>
                <li class="nav_item">
                    <a href="#" class="nav_link">Ranking</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/contest') }}" class="nav_link">Contest</a>
                </li>
                <li class="nav_item">
                    <a href="#" class="nav_link">About</a>
                </li>
                @auth
                <li class="nav_item dropdown">
                    <a href="#" class="nav_image nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
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
                <li>
                    <a class="btn btn-success" style="border-radius:20px" href="/login">
                        Login
                    </a>
                </li>
                <li>
                    <a class="btn btn-primary" style="border-radius:20px" href="/register">
                        Register
                    </a>
                </li>
                @endauth

                
            </ul>
        </div>
    </div> --}}

<header class="header" id="header">
    <nav class="nav me-12">
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

                        <i class="bi bi-person-circle  btnDropdownIcon" onclick="toggle_dropdown_icon()"
                            style="width:2rem"></i>

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
                    <li class="nav_item">
                        <a class="nav_link signup-navbar me-3"  href="/register">
                            Register
                        </a>
                    </li>
                    <a class="nav_link login-navbar"  href="/login">
                        Login
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
