<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontello-5c9a1b5d/css/fontello.css">
        <link rel="stylesheet" href="fontello-385806cc/css/fontello.css">
        <link rel="stylesheet" href="fontello-1551c7d9/css/fontello.css">
        
    </head>
    <body>
        @yield('content')
    </body>
</html>
