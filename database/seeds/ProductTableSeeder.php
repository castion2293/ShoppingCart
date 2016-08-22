<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
           'imagePath' => 'https://img.buzzfeed.com/buzzfeed-static/static/enhanced/webdr02/2013/7/31/12/grid-cell-12788-1375287846-44.jpg',
           'title' => 'Harry Potter',
           'description' => 'Super cool - at least as a child.',
           'price' => 10
        ]);
        $product->save();
    }
}
