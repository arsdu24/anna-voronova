<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Category 1',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
            [
                'title' => 'Category 2',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
            [
                'title' => 'Category 3',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
        ]);
    }
}
