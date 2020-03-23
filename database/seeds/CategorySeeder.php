<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            [
                'name' => 'Food',
                'desc' => 'food'
            ],
            [
                'name' => 'Medicines',
                'desc' => 'Medicines'
            ],
            [
                'name' => 'Cosmetic',
                'desc' => 'Cosmetic'
            ],
        ];

        foreach ($cats as $cat) {
            $newcat = new Category;
            $newcat->fill($cat)->save();
        }
    }
}
