<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - @yield('title')</title>
    <link rel="stylesheet" href ="{{url('css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {font-family: "Itim", cursive;}
        body {
                background-color: #fac8f1;
                /*background-image: url("{{ asset('img/yim2.png') }}");*/
                /*background-image: url("https://tenor.com/view/dog-smirk-dark-side-evil-dog-dog-smile-gif-15161312519845411874");*/
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

    </style>
    @stack('styles')
</head>
    <body>
            <header class ="fs-1 text-center">@yield('header')</header>
            @yield('content')
        @stack('scripts')
    </body>
</html>
