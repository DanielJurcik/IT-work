<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;

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

Route::get('/test', [HomeController::class, 'test']);


Route::post('/insert-task', [HomeController::class, 'insertTask'])->name('insert');
Route::get('/select-all-tasks', [HomeController::class, 'selectAllTasks'])->name('select-all-tasks');
Route::get('/select-task/{id}', [HomeController::class, 'selectTask'])->name('select');
Route::get('/delete-task/{id}', [HomeController::class, 'deleteTask'])->name('delete');
Route::get('/update-task-form/{id}', [HomeController::class, 'getUpdateForm'])->name('update-form');
Route::post('/update-task', [HomeController::class, 'updateTask'])->name('update');
Route::get('/select-all-offers', [HomeController::class, 'selectAllOffers'])->name('select-all-offers');

Route::post('/insert-company', [HomeController::class, 'insertCompany'])->name('insert-company');
Route::get('/add-company', [HomeController::class, 'getInsertForm'])->name('insert-form');
Route::get('/companies', [CompanyController::class, 'selectAllCompanies'])->name('select-all-companies');
Route::get('/company-detail/{id}', [CompanyController::class, 'selectCompany'])->name('select-company');
Route::get('/update-company-form/{id}', [CompanyController::class, 'getUpdateCompanyForm'])->name('update-company-form');
Route::post('/update-company', [CompanyController::class, 'updateCompany'])->name('update-company');