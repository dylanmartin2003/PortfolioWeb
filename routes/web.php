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
})->name('home');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/competences', function () {
    return view('competences');
})->name('competences');

Route::get('/experiences', function () {
    return view('experiences');
})->name('experiences');

Route::get('/logiciels', function () {
    return view('logiciels');
})->name('logiciels');

Route::get('/contact/{projet}',[\App\Http\Controllers\ControllerProjets::class,'contact'])->name('contact');

Route::get('/projets/{id}',[\App\Http\Controllers\ControllerProjets::class,'show'])->name('projets.show');

Route::get('/projets',[\App\Http\Controllers\ControllerProjets::class,'index'])->name('projets.index');

Route::post('/send',[\App\Http\Controllers\ControllerProjets::class,'send'])->name('send');
