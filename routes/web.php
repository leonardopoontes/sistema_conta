<?php

use App\Http\Controllers\DebtController;
use App\Http\Controllers\GanhoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/debts', [DebtController::class, 'index'])->name('debts.index');
    Route::get('/debts/create', [DebtController::class, 'create'])->name('debts.create');
    Route::post('/debts/create', [DebtController::class, 'store'])->name('debts.store');
    Route::get('/debts/edit/{id}', [DebtController::class, 'edit'])->name('debts.edit');
    Route::put('/debts/edit/{id}', [DebtController::class, 'update'])->name('debts.update');
    //Route::delete('/debts/{id}', [DebtController::class, 'destroy'])->name('debts.destroy');
    Route::delete('/debts/delete/{id}', [DebtController::class, 'destroy'])->name('debts.destroy');


    Route::get('/ganhos', [GanhoController::class, 'index'])->name('ganhos.index');
    Route::get('/ganhos/create', [GanhoController::class, 'create'])->name('ganhos.create');
    Route::post('/ganhos/create', [GanhoController::class, 'store'])->name('ganhos.store');
    Route::get('/ganhos/edit/{id}', [GanhoController::class, 'edit'])->name('ganhos.edit');
    Route::put('/ganhos/edit/{id}', [GanhoController::class, 'update'])->name('ganhos.update');
    //Route::delete('/ganhos/delete/{id}', [GanhoController::class, 'destroy'])->name('ganhos.destroy');
    Route::delete('/ganhos/delete/{id}', [GanhoController::class, 'destroy'])->name('ganhos.destroy');


    Route::get('/financeiro', function () {
        return view('financeiro');
    });


});

require __DIR__.'/auth.php';
