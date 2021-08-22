<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {   $thumbnail = ['banner4.jpg'];
        DB::table('product')->insert([
            [
                'name' => 'Product 1',
                'excerpt' => 'Excerpt',
                'price' => '20',
                'thumbnail' => serialize($thumbnail),
                'published' => 1,
            ],
            [
                'name' => 'Product 2',
                'excerpt' => 'Excerpt',
                'price' => '23.45',
                'thumbnail' => serialize($thumbnail),
                'published' => 1,
            ],
            [
                'name' => 'Product 3',
                'excerpt' => 'Excerpt',
                'price' => '54.23',
                'thumbnail' => serialize($thumbnail),
                'published' => 1,
            ],
            [
                'name' => 'Product 4',
                'excerpt' => 'Excerpt',
                'price' => '12.42',
                'thumbnail' => serialize($thumbnail),
                'published' => 1,
            ],
          ]);
    }
}
