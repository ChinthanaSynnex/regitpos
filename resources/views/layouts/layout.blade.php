<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regit POS</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_style.css') }}">
</head>
<body>
    @include('layouts.navbar')

    <section class="home-section">
        <div class="home-content">
        {{-- change this image later --}}
        <img src="{{ asset('images/nav_icons/home_nav.png') }}" alt="nav_icon" class="menu_icon">
        <span class="text">Synnex IT Solution</span>
        </div>

        @yield('content')
    </section>

    <script src="{{ asset("js/nav_script.js") }}"></script>
</body>
</html>
