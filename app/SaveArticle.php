<?php

namespace App;

use App\Article;
use NewsApi;

class SaveArticle
{


	/**
	 * [save description]
	 * @param  [type] $article [description]
	 * @return [type]          [description]
	 */
	public function save($source)
	{	

		// Fetches sources from API
		$sourceArticles = NewsApi::getArticles($source["source_id"])["articles"];

		// Stores articles in the database
		foreach($sourceArticles as $sourceArticle) {
	        $article = new Article;

	        $article->source_id = $source["id"];
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
