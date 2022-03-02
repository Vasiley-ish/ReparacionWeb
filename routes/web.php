<?php

use App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;
use Illuminate\Http\SubmitRequest;
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
    return view('landing');
})->name('landing');

Route::group(['middleware'=>['auth']], function () {

    Route::get('/dashboard',
    [SubmitController::class, 'show']
    )->name('dashboard');

    Route::post('dashboard/submit', 
      [SubmitController::class, 'submit']
    )->name('submit');

});


Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');

});


require __DIR__.'/auth.php';
