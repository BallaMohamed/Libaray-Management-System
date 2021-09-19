<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MetaphorController;
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
Route::get('/' , function()
{
	return view('login');
});
Route::get('metaphor/{id}/returned' , [MetaphorController::class , 'ReturnBook' ]);
Route::get('/metaphors/display' , [MetaphorController::class , 'display' ]);
Route::get('change_language/{locale}' , [GeneralController::class , 'changeLanguage' ])->name('frontend_change_locale');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/books' , BookController::class);
Route::resource('/students' , StudentController::class);
Route::resource('/metaphors' , MetaphorController::class);
