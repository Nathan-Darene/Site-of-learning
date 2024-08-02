<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/admin.css') }}">
    <title>@yield('title', 'Responsive Dashboard')</title>
</head>

<body>
    <div class="container">
        @include('admin_page.partials.sidebar')

        <main>
            @yield('contents')
        </main>

        @include('admin_page.partials.right-section')
    </div>

    <script src="{{ asset('js/admin_page/orders.js') }}"></script>
    <script src="{{ asset('js/admin_page/admin.js') }}"></script>
    <script src="{{ asset('js/admin_page/active.js') }}"></script>
</body>

</html>
