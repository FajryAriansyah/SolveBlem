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
  <div class="login-page">
    <div class="login">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="content-card-login">
            <h1 class="card-title-login">Login</h1>
            <form class="card-form" action="/login" method="POST">
              @csrf
                <div class="card-form-group form-email">
                    <label for="email"></label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input class="my-input @error('email') is-invalid @enderror" type="text" id="email" name="email"
                    placeholder="Email" autofocus required value="{{ old('email') }}">
                </div>
                <div class="card-form-group form-password">
                    <label for="password"></label>
                    <input class="my-input" type="password" id="password" name="password" placeholder="Password"
                        required>
                </div>
                <div class="card-button">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="register">
            <p class="text-register">Belum registrasi? <a href="{{url ("/register")}}">Registrasi sekarang!</a></p>
        </div>
    </div>
    <div class="black-container-login">
        <h1 class="solveblem-text">Solveblem</h1>
    </div>
</div>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>