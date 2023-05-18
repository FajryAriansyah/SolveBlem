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
    <div class="registrasi-page">
        <div class="registrasi">
            <div class="content-card-login">
                <h1 class="card-title-login">Registrasi</h1>
                <form class="card-form" action="/register" method="POST">
                    @csrf
                    <div class="card-form-group form-name">
                        <label for="name"></label>
                        <input class="my-input @error('name') is-invalid @enderror" type="text" id="name" name="name"
                            placeholder="Name" autofocus required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-form-group form-username">
                        <label for="username"></label>
                        <input class="my-input @error('username') is-invalid @enderror" type="text" id="username"
                            name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-form-group form-email">
                        <label for="email"></label>
                        <input class="my-input @error('email') is-invalid @enderror" type="text" id="email" name="email"
                            placeholder="Email" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-form-group form-password">
                        <label for="password"></label>
                        <input class="my-input @error('password') is-invalid @enderror" type="password" id="password"
                            name="password" placeholder="Password" autofocus required value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-button button-register">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
            <div class="register">
                <p class="text-register">Sudah registrasi? <a href="{{url ("/login")}}">Login sekarang!</a></p>
            </div>
        </div>
        <div class="black-container-login">
            <h1 class="solveblem-text">Solveblem</h1>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>