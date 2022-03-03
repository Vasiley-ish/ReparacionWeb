<?php

use App\Http\Controllers\SubmitController;
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

Route::get('/',
[SubmitController::class, 'showLanding']
)->name('landing');

Route::group(['middleware'=>['auth']], function () {

    Route::get('/dashboard',
    [SubmitController::class, 'show']
    )->name('dashboard');

    Route::post('dashboard/submit', 
      [SubmitController::class, 'submit']
    )->name('submit');

    Route::get('dashboard/delete/{id}', 
      [SubmitController::class, 'delete']
    )->name('delete');
});


Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/admin', 
        [SubmitController::class, 'showAdmin']
    )->name('admin');

    Route::get('admin/delete/{id}', 
    [SubmitController::class, 'adminDelete']
  )->name('adminDelete');

});


require __DIR__.'/auth.php';
