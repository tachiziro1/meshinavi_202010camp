<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(RestaurantTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(AdminTablesSeeder::class);
    }
}
