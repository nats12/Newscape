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