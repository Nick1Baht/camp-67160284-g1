<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - @yield('title')</title>
    <link rel="stylesheet" href ="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {font-family: "Itim", cursive;}
        body {
                background-image: url("{{ asset('img/yim2.png') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
    .content-box {
    width: 40%;
    margin: 50px auto;
    padding: 20px;
    background-color: #f3a7e5;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    opacity: 75%;
    align-items: center;
    }

    </style>
    @stack('styles')
</head>
    <body>
        <div class = "content-box">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
