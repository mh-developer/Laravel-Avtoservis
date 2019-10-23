<?php

use Illuminate\Http\Request;
use App\Reservation;
use App\Car;
use App\Avtoservi;
use App\Service;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars', function () {
    $cars = Car::get()->take(20);

    return response()->json($cars);
});


Route::get('/reservations', function () {
    $reservations = Reservation::get()->take(20);

    return response()->json($reservations);
});

Route::get('/cars/{id}', function ($id) {
    $cars = Car::where("id_avtomobila", $id)->first();

    return response()->json($cars);
});

Route::get('/avtoservisi', function () {

    $avtoservis = Avtoservi::get()->take(20);

    return response()->json($avtoservis);
});

Route::get('/storitve', function () {

    $services = Service::get()->take(20);

    return response()->json($services);
});
