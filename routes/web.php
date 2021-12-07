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

//HomeController
Route::get('/', [HomeController::class, 'getJobAndCompanyCount'])->name('dashboard');


//JobOfferController
Route::get('/job-offer-info/{id}', [JobOfferController::class, 'jobOfferDetail'])->name('select-job-offer');
Route::get('/update-job-offer-form/{id}', [JobOfferController::class, 'showJobOfferForm'])->name('update-job-offer-form');
Route::post('/update-job-offer', [JobOfferController::class, 'updateJobOffer'])->name('update-job-offer');
Route::get('/delete-job-offer/{id}', [JobOfferController::class, 'deleteJobOffer'])->name('delete-job-offer');
Route::get('/select-all-offers', [JobOfferController::class, 'selectAllOffers'])->name('select-all-offers');
Route::get('/create-job-offer/{id}', [JobOfferController::class, 'createNewJobOffer'])->name('create-new-job-offer');
Route::post('/insert-job-offer', [JobOfferController::class, 'insertNewJobOffer'])->name('insert-job-offer');

//CompanyController
Route::post('/insert-company', [CompanyController::class, 'insertCompany'])->name('insert-company');
Route::get('/add-company', [CompanyController::class, 'getInsertForm'])->name('insert-form');
Route::get('/companies', [CompanyController::class, 'selectAllCompanies'])->name('select-all-companies');
Route::get('/company-detail/{id}', [CompanyController::class, 'selectCompany'])->name('select-company');
Route::get('/update-company-form/{id}', [CompanyController::class, 'getUpdateCompanyForm'])->name('update-company-form');
Route::post('/update-company', [CompanyController::class, 'updateCompany'])->name('update-company');
Route::get('/delete-company/{id}', [CompanyController::class, 'deleteCompany'])->name('delete-company');