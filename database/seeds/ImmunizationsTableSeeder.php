<?php

use Illuminate\Database\Seeder;

class ImmunizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Immunization::class, 20)->create();
    }
}
