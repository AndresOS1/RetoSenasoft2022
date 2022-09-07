<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartasController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use Auth;
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






Route::get('verLogin',[LoginController::class,'verLogin'])->name('verLogin');
Route::post('Login',[LoginController::class,'Login'])->name('Login');
Route::post('logout',[LoginController::class,'Logout'])->name('logout');

Route::get('verRegistro',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('Register',[RegisterController::class,'Register'])->name('Register');
Route::get('/juego', [CartasController::class,'index'])->name('juego');

Route::get('home',function(){
    return view('home');
})->name('home');
// Route::get('partida',[PartidaController::class,'create'])->name('partida')->middleware('Auth');


Route::post('crearPartida',[PartidaController::class,'create'])->name('crearPartida');
