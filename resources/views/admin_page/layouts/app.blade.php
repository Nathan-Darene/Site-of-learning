<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/analytic-center.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/modal_windows.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/background.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/checklist.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/status.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/delete.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/add.css') }}">

    <title>@yield('title', 'Responsive Dashboard')</title>
</head>

<body class="bodys dark-mode-variables">
    <div class="container">
        @include('admin_page.partials.sidebar')

        <main>
            @yield('contents')
        </main>

        @include('admin_page.layouts.@include')

    </div>

    <script src="{{ asset('js/admin_page/orders.js') }}"></script>
    <script src="{{ asset('js/admin_page/admin.js') }}"></script>
    <script src="{{ asset('js/admin_page/active.js') }}"></script>
    <script src="{{ asset('js/admin_page/modal_window.js') }}"></script>
    <script src="{{ asset('js/admin_page/no-translate.js') }}"></script>
    <script src="{{ asset('js/admin_page/show.js') }}"></script>
</body>

</html>
