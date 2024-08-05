<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='{{ asset("https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css") }}' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fontawesome-6.5.1-beta3/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/users_page/Formation.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/users_page/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/users_page/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/users_page/progres.css') }}">

    <title>@yield('title')</title>
</head>

<body>


    <div class="top-container">
        @include('users_page.partials.nav')
        @yield('content')
    </div>

    <div class="bottom-container">
        @yield('bottom-content')
    </div>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/user_page/Formation.js') }}"></script>
    <script src="{{ asset('js/user_page/date.js') }}"></script>
    <script src="{{ asset('js/user_page/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/user_page/chart.js') }}"></script>
</body>

</html>
