<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Newscape</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontello-5c9a1b5d/css/fontello.css">

        
    </head>
    <body>
        <div id="root"></div>
        
        <script>
            window.Laravel = <?php echo json_encode([
                'loginPage' => $loginPage,
                'logoutPage' => $logoutPage,
                'timeline' => $timeline,
                'newsSources' => $newsSources,
                'newsArticles' => $newsArticles,
                'user' => $user,
                'categories' => $categories,
                'sources' => $sources,
                'languages' => $languages,
                'selectedLanguages' => $userLanguages,
                'selectedCategories' => $userCategories,
                'selectedSources' => $userSources,
            ]); ?>
        </script>

        <script src="js/app.js"></script>

    </body>
</html>
