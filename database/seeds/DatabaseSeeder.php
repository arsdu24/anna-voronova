<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CollectionsTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(BannersTableSeeder::class);
    }
}
