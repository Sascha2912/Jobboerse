<?php

use App\Http\Controllers\CategoryController;
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
    return view('layouts.app');
});

// Definieren von CRUD-Operationen (Create, Read, Update, Delete)

// Jobs
Route::get('/jobs', 'JobController@index');
Route::get('/jobs/create', 'JobController@create');
Route::post('/jobs', 'JobController@store');
Route::get('/jobs/{job}', 'JobController@show');
Route::get('/jobs/{job}/edit', 'JobController@edit');
Route::put('/jobs/{job}', 'JobController@update');
Route::delete('/jobs/{job}', 'JobController@destroy');


// Companies
Route::get('/companies', 'CompanyController@index');
Route::get('/companies/create', 'CompanyController@create');
Route::post('/companies', 'CompanyController@store');
Route::get('/companies/{company}', 'CompanyController@show');
Route::get('/companies/{company}/edit', 'CompanyController@edit');
Route::put('/companies/{company}', 'CompanyController@update');
Route::delete('/companies/{company}', 'CompanyController@destroy');

// Categories
//Route::get('categories', [CategoryController::class, 'index']);
//Route::get('/categories/create', [CategoryController::class, 'create']);
//Route::post('/categories', [CategoryController::class, 'store']);
//Route::get('/categories/{category}', [CategoryController::class, 'show']);
//Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
//Route::put('/categories/{category}', [CategoryController::class, 'update']);
//Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

// Route::get('/categories', 'CategoryController@index')->name('categories.index');
// Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
// Route::post('/categories', 'CategoryController@store')->name('categories.store');
// Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
// Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
// Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
// Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');

Route::prefix('categories')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

//Route::prefix('categories')->group(function (){
//    Route::get('/', 'CategoryController@index')->name('categories.index');
//    Route::get('/create', 'CategoryController@create')->name('categories.create');
//    Route::post('/', 'CategoryController@store')->name('categories.store');
//    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
//    Route::get('/{category}/edit', 'CategoryController@edit')->name('categories.edit');
//    Route::put('/{category}', 'CategoryController@update')->name('categories.update');
//    Route::delete('/{category}', 'CategoryController@destroy')->name('categories.destroy');
//});

//Route::controller(CategoryController::class)->group(function (){
//    Route::get('/', 'CategoryController@index')->name('categories.index');
//    Route::get('/create', 'CategoryController@create')->name('categories.create');
//    Route::post('/', 'CategoryController@store')->name('categories.store');
//    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
//    Route::get('/{category}/edit', 'CategoryController@edit')->name('categories.edit');
//    Route::put('/{category}', 'CategoryController@update')->name('categories.update');
//    Route::delete('/{category}', 'CategoryController@destroy')->name('categories.destroy');
//});



// Users
Route::get('/users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');

// Job_Users
Route::get('/job_users', 'JobUserController@index');
Route::get('job_users/create', 'JobUserController@create');
Route::post('job_users', 'JobUserController@store');
Route::get('/job_users/{job_user}', 'JobUserController@show');
Route::get('/job_users/{job_user}/edit', 'JobUserController@edit');
Route::put('/job_users/{job_user}', 'JobUserController@update');
Route::delete('/job_users/{job_user}', 'JobUserController@destroy');
