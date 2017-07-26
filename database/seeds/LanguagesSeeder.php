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
      );


        DB::table('languages')->insert($languages);
    }
}
