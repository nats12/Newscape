<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	DB::table('categories')->truncate();

    	$categories = array(
    		array(
    			'name' => 'business'
    		),

    		array(
    			'name' => 'entertainment'
    		),

    		array(
    			'name' => 'gaming'
    		),

    		array(
    			'name' => 'general'
    		),

            array(
                'name' => 'health'
            ),

    		array(
    			'name' => 'music'
    		),

    		array(
    			'name' => 'politics'
    		),

            array(
                'name' => 'science'
            ),

            array(
                'name' => 'sports'
            ),

    		array(
    			'name' => 'technology'
    		),
    	);


        DB::table('categories')->insert($categories);
    }
}
