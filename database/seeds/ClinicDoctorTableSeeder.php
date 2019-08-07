<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class ClinicDoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Doctor::has('clinics')->get()->isEmpty()) {
            $doctors = Doctor::all();
            foreach($doctors as $doctor) {
                $clinicIds = [];
                $arraySize = rand(0, 5);

                for($i = 0; $i <= $arraySize; $i++)
                    $clinicIds[] = rand(1, 100);

                $doctor->clinics()->attach($clinicIds);
            }
        }
    }
}