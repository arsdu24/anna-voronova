<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'title' => 'Slide title example',
                'excerpt' => 'Slide execerpt example',
                'highlighted' => 'Slide highlighted example',
                'thumbnail' =>  'slide11_1944x.png',
                'is_slide' => true,
                'link' => '/products'
            ],
            [
                'title' => 'Slide title example 2',
                'excerpt' => 'Slide execerpt example 2',
                'highlighted' => 'Slide highlighted example 2',
                'thumbnail' =>  'slide12_1944x.png',
                'is_slide' => true,
                'link' => '/products'
            ],
            [
                'title' => 'Slide title example 3',
                'excerpt' => 'Slide execerpt example 3',
                'highlighted' => 'Slide highlighted example 3',
                'thumbnail' =>  'slide11_1944x.png',
                'is_slide' => true,
                'link' => '/products'
            ],
        ]);
    }
}
