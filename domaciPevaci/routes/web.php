<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pevacs','\App\Http\Controllers\PevacController@index');
Route::get('/pevacs/{id}','\App\Http\Controllers\PevacController@show');
Route::post('/pevacs/sacuvaj','\App\Http\Controllers\PevacController@store');

Route::get('/svirkas','\App\Http\Controllers\SvirkaController@index');
Route::post('/svirkas/sacuvaj','\App\Http\Controllers\SvirkaController@store');
Route::delete('/svirkas/izbrisi/{id}','\App\Http\Controllers\SvirkaController@destroy');