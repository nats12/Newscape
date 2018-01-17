<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

      DB::table('languages')->truncate();

      $languages = array(
        array(
          'iso' => 'en',
          'name' => 'english'
        ),
        array(
          'iso' => 'de',
          'name' => 'german'
        ),
        array(
          'iso' => 'es',
          'name' => 'spanish'
        ),
        array(
          'iso' => 'fr',
          'name' => 'french'
        ),
        array(
          'iso' => 'it',
          'name' => 'italian'
        ),
        array(
          'iso' => 'ru',
          'name' => 'russian'
        ),
        array(
          'iso' => 'nl',
          'name' => 'dutch'
        ),
        array(
          'iso' => 'ud',
          'name' => 'urdu'
        ),

      );


        DB::table('languages')->insert($languages);
    }
}
