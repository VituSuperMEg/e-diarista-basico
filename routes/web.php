<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarDiarias;
use App\Http\Controllers\DetalharDiarias;

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

Route::get('/', ListarDiarias::class)->name('index');
Route::get('/diarias/{id}', DetalharDiarias::class)->name('diarias.show');

