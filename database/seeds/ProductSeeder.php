<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 30)->make() ->each(function ($product) {
            $cat = Category::inRandomOrder() -> first();
            $product->category() ->associate($cat);
            $product -> save();
            });
    }
}
