
    <div class="nav ">
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
    </div>
