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

// Route::get('/', function () {
//     return view('home');
// });


// Route::delete('students/{id}','App\Http\Controllers\StudentsController@delete')->name('students.delete');

Auth::routes();

Route::get('/', [App\Http\Controllers\StudentsController::class, 'index'])->name('index')->middleware('auth');

Route::controller(App\Http\Controllers\StudentsController::class,)->name('students.')->prefix('students')->middleware('auth')->group(function(){
    Route::get('', 'index')->name('index');
    Route::get('/view','students')->name('view');
    Route::post('/add','store')->name('adding');
    Route::put('/{id}','update')->name('update');
    Route::get('/{id}/edit','edit')->name('edit');
    Route::delete('/{id}','delete')->name('delete');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'students'])->name('view');

