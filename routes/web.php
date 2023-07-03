<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\EmployeeController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('cars', CarController::class);
Route::resource('employees', EmployeeController::class);
Route::get('test', function () {
    return Car::find(5)->cashIn;
});
Route::get('employees-select-data', [EmployeeController::class, 'generateSelectOptions'])->name('select.employees');

Route::get('/', function () {
    return redirect()->route('cars.index');
});