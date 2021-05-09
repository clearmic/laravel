<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<= 100; $i++) {
            $product = new \App\Product([
                'name' => 'サンプル商品' . $i,
                'category_id' => rand(1,6),
                'price' => rand(10,50) * 10,
            ]);
            $product->save();
        }
    }
}
