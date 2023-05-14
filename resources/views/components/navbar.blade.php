<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{url(" solveblem")}}" class="nav_brand">
                Solveblem
            </a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="{{url("solveblem")}}" class="nav_link active-link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{url("/problem")}}" class="nav_link">Problem</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{url("/contest")}}" class="nav_link">Contest</a>
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
                            <li><a class="dropdown-item" href="/"><i class="bi bi-layout-text-sidebar-reverse"></i>My
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
                        <a href="#" class="nav_link signup">Sign Up</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link login">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>