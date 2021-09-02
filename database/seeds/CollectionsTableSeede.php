<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('collections')->insert([
            [
                'title' => 'Collection 1',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
            [
                'title' => 'Collection 2',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
            [
                'title' => 'Collection 3',
                'description' => 'Description',
                'thumbnail' =>  'banner4.jpg',
            ],
        ]);
    }
}
