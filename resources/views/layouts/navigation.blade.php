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
            <a href="#" class="nav_brand">
                Solveblem
            </a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#" class="nav_dsadsalink active-link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Problem</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Ranking</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Contest</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">About</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">
                            <img src="{{ asset('images/profile_solveblem.png') }}" alt="arrow_left">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>