<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function getAll()
    {
        return Doctor::all();
    }

    public function get($id)
    {
        return Doctor::find($id);
    }

    public function getFreeDoctors()
    {
        return Doctor::doesntHave('clinics')->get();
    }
}
