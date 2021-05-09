<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'チョコレート']);
        DB::table('categories')->insert(['name' => 'ガム']);
        DB::table('categories')->insert(['name' => 'スナック']);
        DB::table('categories')->insert(['name' => 'アイス']);
        DB::table('categories')->insert(['name' => 'クッキー']);
        DB::table('categories')->insert(['name' => 'せんべい']);
    }
}
