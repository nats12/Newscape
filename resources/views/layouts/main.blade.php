<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <meta name="description" content="Newscape fuses Twitter & News APIs to give users a personalised dashboard of their favourite news sources alongside their Twitter feed.">
        <!-- OG meta tags -->
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Newscape: a personalised dashboard of your favourite news sources"/>
        <meta property="og:url" content="http://newscape.herokuapp.com"/>
        <meta property="og:description" content="Newscape fuses Twitter & News APIs to give users a personalised dashboard of their favourite news sources alongside their Twitter feed."/>
        <meta property="og:image" content="http://newscape.herokuapp.com/images/readme/newscape.png"/>
        <!-- Twitter meta tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@LaiJase">
        <meta name="twitter:creator" content="@nats_369">
        <meta name="twitter:title" content="Newscape: a personalised dashboard of your favourite news sources">
        <meta name="twitter:description" content="Newscape fuses Twitter & News APIs to give users a personalised dashboard of their favourite news sources alongside their Twitter feed.">
        <meta name="twitter:image" content="http://newscape.herokuapp.com/images/readme/newscape.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontello-2705ffaf/css/fontello.css">
        
    </head>
    <body>
        @yield('content')
    </body>
</html>
