<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/public/assets/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/add.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin_page/loginAdmin_CSS/login.css') }}">


    <title>@yield('title', 'Formation Oral')</title>
</head>
<body>
    <div class="formulaire">
        <main>
            @yield('formulaire')
        </main>
    </div>

</body>
</html>
