<?php

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
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories/{category}/edit', 'CategoryController@edit');
Route::put('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');

// Users
Route::get('/users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');
