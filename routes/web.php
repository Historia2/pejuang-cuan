<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ArtikelController;

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
    /**
     * Dia ngakses file welcome.blade.php di folder resources/views
     */
    return view('welcome');
});
Route::get('/landing', [LandingController::class,'index'])->name('landing');
Route::get('/artikel', [ArtikelController::class,'index'])->name('artikel');

Route::get('/konten', function () {
    /**
     * Dia ngakses file landing.blade.php di folder resources/views
     */
    return view('content-lain');
});
