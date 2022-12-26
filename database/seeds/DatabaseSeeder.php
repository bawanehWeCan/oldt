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
         $this->call(UserSeeder::class);
         $this->call(RatesSeeder::class);
         $this->call(PointSeeder::class);
         $this->call(StanderSeeder::class);
         $this->call(NotificationSeeder::class);
    }
}
