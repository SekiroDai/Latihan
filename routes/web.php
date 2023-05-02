<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/t', function () {
    return view('t');
});


Route::get('/customer', [CustomerController::class, 'index']) -> name('customer');
Route::get('/customer/create', [CustomerController::class, 'create']) -> name('customer.create');
Route::post('/customer/store', [CustomerController::class, 'store']) -> name('customer.store');
Route::get('/customer/show/{id}', [CustomerController::class, 'show']) -> name('customer.show');
Route::get('/customer/edit/{idd}', [CustomerController::class, 'edit']) -> name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update']) -> name('customer.update');
Route::get('/customer/destroy/{idd}', [CustomerController::class, 'destroy']) -> name('customer.destroy');