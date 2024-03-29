<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\EmployeeDataController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/countries', [EmployeeDataController::class, 'countries']);
Route::get('/employees/{country}/states', [EmployeeDataController::class, 'states']);
Route::get('/employees/{state}/cities', [EmployeeDataController::class, 'cities']);
Route::get('/employees/departments', [EmployeeDataController::class, 'departments']);

//Route::get('employees/', [EmployeeController::class, 'index']);
//Route::post('employees/', [EmployeeController::class, 'store']);
//Route::delete('employees/{employee}', [EmployeeController::class, 'destroy']);

// *** Mergin from routes listed above to this route below "apiResource" *** //

Route::apiResource('employees', EmployeeController::class);