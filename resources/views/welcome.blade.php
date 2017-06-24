<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Newscape</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/style.css">

        
    </head>
    <body>

        <div class="row">
            <div id="root"></div>
        </div>

        <script>
            window.Laravel = <?php echo json_encode([
                'loginPage' => $loginPage,
                'logoutPage' => $logoutPage,
                'timeline' => $timeline,
                'newsSources' => $newsSources,
                'newsArticles' => $newsArticles,
                'user' => $user,
            ]); ?>
        </script>

        <script src="js/app.js"></script>

    </body>
</html>
