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
        $this->call(DoctorsTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(ChildrenTableSeeder::class);
        $this->call(ImmunizationsTableSeeder::class);
    }
}
