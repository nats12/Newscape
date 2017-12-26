<?php

namespace App\Console\Commands;

use App\SaveArticle;
use Illuminate\Console\Command;

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
        $this->articleSaver = new SaveArticle;
        
        return $this->articleSaver->save($source);
    }
}
