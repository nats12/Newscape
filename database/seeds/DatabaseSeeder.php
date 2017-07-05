<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      

        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(CategoriesSeeder::class);
        $this->call(SourcesSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
