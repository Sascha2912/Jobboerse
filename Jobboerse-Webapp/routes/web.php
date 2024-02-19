<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobUserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ImpressumController;

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
Route::prefix('jobs')->group(function (){
    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/{job}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

// Companies
Route::prefix('companies')->group(function (){
    Route::get('/', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/{company}', [CompanyController::class, 'show'])->name('companies.show');
    Route::get('/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/{company}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});

// Categories
Route::prefix('categories')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// Users
Route::prefix('users')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Job_Users
Route::prefix('job_users')->group(function (){
    Route::get('/', [JobUserController::class, 'index'])->name('job_users.index');
    Route::get('/create', [JobUserController::class, 'create'])->name('job_users.create');
    Route::post('/', [JobUserController::class, 'store'])->name('job_users.store');
    Route::get('/{job_user}', [JobUserController::class, 'show'])->name('job_users.show');
    Route::get('/{job_user}/edit', [JobUserController::class, 'edit'])->name('job_users.edit');
    Route::put('/{job_user}', [JobUserController::class, 'update'])->name('job_users.update');
    Route::delete('/{job_user}', [JobUserController::class, 'destroy'])->name('job_users.destroy');
});

// Index
Route::get('/', [IndexController::class, 'index'])->name('index.index');

// Impressum
Route::get('/impressum', [ImpressumController::class, 'index'])->name('impressum.index');
