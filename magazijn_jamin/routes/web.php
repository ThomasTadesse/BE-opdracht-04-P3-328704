<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagazijnController;
use App\Models\Magazijn;
use App\Http\Controllers\LeverancierController;
use App\Models\Leverancier;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\AllergeenController;
use App\Models\Allergeen;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

// resoure magazijn
Route::resource('magazijn', MagazijnController::class);

Route::get('/magazijn', [MagazijnController::class, 'index'])->name('magazijn.index'); // view magazijn.blade.php
Route::get('/magazijn/{id}', [MagazijnController::class, 'show'])->name('magazijn.show'); // view magazijn.blade.php
Route::get('/magazijn/create', [MagazijnController::class, 'create'])->name('magazijn.create'); // view create.blade.php
Route::get('/magazijn/{id}/edit', [MagazijnController::class, 'edit'])->name('magazijn.edit'); // view edit.blade.php
Route::post('/magazijn', [MagazijnController::class, 'store'])->name('magazijn.store'); // store data
Route::put('/magazijn/{id}', [MagazijnController::class, 'update'])->name('magazijn.update'); // update data
Route::delete('/magazijn/{id}', [MagazijnController::class, 'destroy'])->name('magazijn.destroy'); // delete data

//resoure leverancier
Route::resource('leverancier', LeverancierController::class);

Route::get('/leverancier', [LeverancierController::class, 'index'])->name('leverancier.index'); // view index.blade.php
Route::get('/leverancier/{id}', [LeverancierController::class, 'show'])->name('leverancier.show'); // view show.blade.php

Route::get('/leverancier/create', [LeverancierController::class, 'create'])
    ->name('leverancier.create'); // view create.blade.php

Route::get('/leverancier/{id}/edit', [LeverancierController::class, 'edit'])
    ->name('leverancier.edit'); // view edit.blade.php

Route::post('/leverancier', [LeverancierController::class, 'store'])
    ->name('leverancier.store'); // store data

Route::put('/leverancier/{id}', [LeverancierController::class, 'update'])
    ->name('leverancier.update'); // update data

Route::delete('/leverancier/{id}', [LeverancierController::class, 'destroy'])
    ->name('leverancier.destroy'); // delete data


//resoure Allergeen
Route::resource('allergeen', AllergeenController::class);
Route::get('/allergeen', [AllergeenController::class, 'index'])->name('allergeen.index'); // view index.blade.php
Route::get('/allergeen/{id}', [AllergeenController::class, 'show'])->name('allergeen.show'); // view show.blade.php
Route::get('/allergeen/create', [AllergeenController::class, 'create'])->name('allergeen.create'); // view create.blade.php
Route::get('/allergeen/{id}/edit', [AllergeenController::class, 'edit'])->name('allergeen.edit'); // view edit.blade.php
Route::post('/allergeen', [AllergeenController::class, 'store'])->name('allergeen.store'); // store data
Route::put('/allergeen/{id}', [AllergeenController::class, 'update'])->name('allergeen.update'); // update data
Route::delete('/allergeen/{id}', [AllergeenController::class, 'destroy'])->name('allergeen.destroy'); // delete data