<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Doctor::all()->isEmpty()) {
            factory(Doctor::class, 300)->create();
        }
    }
}
