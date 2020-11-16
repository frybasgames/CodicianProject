<?php

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

Route::resource('posts', 'App\Http\Controllers\PostController');

Route::resource('Company', 'App\Http\Controllers\CompanyController');

Route::resource('Personal', 'App\Http\Controllers\PersonalController');

//Route::resource('personal', 'App\Http\Controllers\CompanyController');

//  Route::post('/stored', 'PersonalController@store')->name('stored');
// Route::post('/personal',[PersonalController::class, 'store'])->name('personalpost');


// Route::post('/personalshow',[PersonalController::class, 'show'])->name('personalpostshow');
// Route::post('/personaldestroy',[PersonalController::class, 'destroy'])->name('personalpostdestroy');

// Route::get('/create',[PersonalController::class, 'index']);


// Route::get('personal-request', 'PersonalController@create');
// Route::post('personal-request', 'PersonalController@store');