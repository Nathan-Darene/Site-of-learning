<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/modal_windows.css') }}">
    <title>@yield('title', 'Responsive Dashboard')</title>
</head>

<body>
    <div class="container">
        @include('admin_page.partials.sidebar')

        <main>
            @yield('contents')
        </main>

        @include('admin_page.partials.right-section')
        @include('admin_page.partials.add-formateur')
        @include('admin_page.partials.delete-formateur')
    </div>

    <script src="{{ asset('js/admin_page/orders.js') }}"></script>
    <script src="{{ asset('js/admin_page/admin.js') }}"></script>
    <script src="{{ asset('js/admin_page/active.js') }}"></script>
    <script src="{{ asset('js/admin_page/modal_window.js') }}"></script>
</body>

</html>
