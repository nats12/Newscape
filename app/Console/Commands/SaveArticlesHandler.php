<?php

namespace App\Console\Commands;

use App\SaveArticle;
use Illuminate\Console\Command;
use NewsApi;
use App\Article;

class SaveArticlesHandler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save news articles to the database';

    /**
     * .
     *
     * @var SaveArticle
     */
    protected $article;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle($source)
    {   
        // Fetches sources from API
        $sourceArticles = NewsApi::getArticles($source["source_id"])['articles'];

        // Stores articles in the database
        foreach($sourceArticles as $sourceArticle) {
            $article = new Article;

            $article->source_id = $source["source_id"];
            $article->source_name = $source["name"];
            $article->source_category = $source["category"];
            $article->source_language = $source["language"];
            $article->title = $sourceArticle["title"];
            $article->description = $sourceArticle["description"];
            $article->url = $sourceArticle["url"];
            $article->url_to_image = $sourceArticle["urlToImage"];
            $article->published_at = $sourceArticle["publishedAt"];

            $article->save();
        }

        return $sourceArticles;
    }
}
