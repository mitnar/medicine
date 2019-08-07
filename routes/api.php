<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/v1/clinics', "ClinicController@getAll");
Route::get('/v1/clinics/{id}', "ClinicController@get");
Route::get('/v1/clinics/empty', "ClinicController@getEmptyClinics");

Route::get('/v1/doctors', "DoctorController@getAll");
Route::get('/v1/doctors/{id}', "DoctorController@get");
Route::get('/v1/doctors/free', "DoctorController@getFreeDoctors");