<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="black-container" style="background-color:#1A1A1B; clip-path: polygon(0 0, 100% 0, 100% 87%, 0% 100%);">
    @include('components.navbar')
    @yield('container')
    @include('components.footer')

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>