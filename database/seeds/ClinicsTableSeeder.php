<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Clinic;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Clinic::all()->isEmpty()) {
            factory(Clinic::class, 100)->create();
        }
    }
}
