<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Models\Computer;

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
//ROTTE GENERALI
Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/profilo',[PublicController::class,'index'])->name('profile.index');


//Rotte Console
Route::get('/console/index',[ConsolController::class,'index'])->name('console.index');
Route::get('/console/create',[ConsolController::class, 'create'])->name('console.create');
//
Route::post('/console/store',[ConsolController::class, 'store'])->name('console.store');
Route::get('/console/show/{consol}',[ConsolController::class,'show'])->name('console.show');
//
Route::get('/console/edit/{consol}',[ConsolController::class, 'edit'])->name('console.edit');
Route::put('/console/update/{consol}',[ConsolController::class,'update'])->name('console.update');
//
Route::delete('/console/delete/{consol}',[ConsolController::class,'destroy'])->name('console.delete');

//Rotte Computer
Route::get('/computer/index',[ComputerController::class,'index'])->name('computer.index');
Route::get('/computer/create',[ComputerController::class,'create'])->name('computer.create');
//
Route::post('/computer/store',[ComputerController::class,'store'])->name('computer.store');
Route::get('/computer/show/{computer}',[ComputerController::class,'show'])->name('computer.show');
//
Route::get('/computer/edit/{computer}',[ComputerController::class,'edit'])->name('computer.edit');
Route::put('/computer/update/{computer}',[ComputerController::class,'update'])->name('computer.update');
//
Route::delete('/computer/delete/{computer}',[ComputerController::class,'destroy'])->name('computer.delete');

//Rotte Videogiochi
Route::get('/game/index',[GameController::class,'index'])->name('game.index');
Route::get('/game/create',[GameController::class,'create'])->name('game.create');
//
Route::post('/game/store',[GameController::class,'store'])->name('game.store');
Route::get('/game/shoow/{game}',[GameController::class, 'show'])->name('game.show');
//
Route::get('/game/edit/{game}',[GameController::class,'edit'])->name('game.edit');
Route::put('/game/update/{game}',[GameController::class,'update'])->name('game.update');
//
Route::delete('/game/delete/{game}',[GameController::class,'destroy'])->name('game.delete');
