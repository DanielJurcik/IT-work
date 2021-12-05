<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobOfferController;

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


Route::get('/job-offer-info/{id}', [JobOfferController::class, 'jobOfferDetail'])->name('select-job-offer');
Route::get('/update-job-offer-form/{id}', [JobOfferController::class, 'showJobOfferForm'])->name('update-job-offer-form');
Route::post('/update-job-offer', [JobOfferController::class, 'updateJobOffer'])->name('update-job-offer');
Route::get('/test3', [HomeController::class, 'test'])->name('delete-job-offer');

Route::get('/select-all-offers', [HomeController::class, 'selectAllOffers'])->name('select-all-offers');
Route::get('/create-job-offer/{id}', [JobOfferController::class, 'createNewJobOffer'])->name('create-new-job-offer');
Route::post('/insert-job-offer', [JobOfferController::class, 'insertNewJobOffer'])->name('insert-job-offer');

Route::post('/insert-company', [CompanyController::class, 'insertCompany'])->name('insert-company');
Route::get('/add-company', [HomeController::class, 'getInsertForm'])->name('insert-form');
Route::get('/companies', [CompanyController::class, 'selectAllCompanies'])->name('select-all-companies');
Route::get('/company-detail/{id}', [CompanyController::class, 'selectCompany'])->name('select-company');
Route::get('/update-company-form/{id}', [CompanyController::class, 'getUpdateCompanyForm'])->name('update-company-form');
Route::post('/update-company', [CompanyController::class, 'updateCompany'])->name('update-company');