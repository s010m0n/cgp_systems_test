<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyController;
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

Route::get('/dashboard', function () {
    return view('admin.client.index');
})->middleware(['auth'])->name('dashboard');
Route::group(['namespace' => 'App\Http\Controllers\Admin' , 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('clients',[ClientController::class, 'index'])->name('client.index');
    Route::get('client/create',[ClientController::class, 'create'])->name('client.create');
    Route::get('client/{id}',[ClientController::class, 'show'])->name('client.show');
    Route::get('client/{id}/edit',[ClientController::class, 'edit'])->name('client.edit');
    Route::post('client',[ClientController::class, 'store'])->name('client.store');
    Route::patch('client/{id}',[ClientController::class,'update'])->name('client.update');
    Route::get('client/{id}/delete',[ClientController::class,'delete'])->name('client.delete');

    Route::get('companies',[CompanyController::class, 'index'])->name('company.index');
    Route::get('company/create',[CompanyController::class, 'create'])->name('company.create');
    Route::get('company/{id}',[CompanyController::class, 'show'])->name('company.show');
    Route::get('company/{id}/edit',[CompanyController::class, 'edit'])->name('company.edit');
    Route::post('company',[CompanyController::class, 'store'])->name('company.store');
    Route::patch('company/{id}',[CompanyController::class,'update'])->name('company.update');
    Route::get('company/{id}/delete',[CompanyController::class,'delete'])->name('company.delete');
});
require __DIR__.'/auth.php';
