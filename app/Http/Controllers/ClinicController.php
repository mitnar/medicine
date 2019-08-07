<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;

class ClinicController extends Controller
{
    public function getAll()
    {
        return Clinic::all();
    }

    public function get($id)
    {
        return Clinic::find($id);
    }

    public function getEmptyClinics()
    {
        return Clinic::doesntHave('doctors')->get();
    }
}
