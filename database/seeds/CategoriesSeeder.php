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

    	DB::table('categories')->delete();

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
    			'name' => 'music'
    		),

    		array(
    			'name' => 'politics'
    		),

    		array(
    			'name' => 'science-and-nature'
    		),

    		array(
    			'name' => 'sport'
    		),

    		array(
    			'name' => 'technology'
    		)
    	);


        DB::table('categories')->insert($categories);
    }
}
