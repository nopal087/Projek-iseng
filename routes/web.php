<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Data;

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
Route::get('/', function () {
    return view('userhome');
});
Route::get('/tambahdata', function () {
    return view('tambahdata');
});
Route::get('/navbar', function () {
    return view('layouts.navbar');
});
Route::get('/footer', function () {
    return view('layouts.footer');
});
Route::get('/header', function () {
    return view('layouts.header');
});
Route::get('/kategori', function () {
    return view('kategori');
});


Route::get('/data', [DataController::class, 'index']);
Route::get('/home/create', [DataController::class, 'create']);
Route::post('/home/store', [DataController::class, 'store']);
Route::get('/editdata/{id}/edit', [DataController::class, 'edit']);
Route::put('/{id}', [DataController::class, 'update']);
Route::delete('/{id}', [DataController::class, 'delete']);




Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/', [DataController::class, 'home']);
    Route::get('/dashboard', [DataController::class, 'index']);
    Route::get('/home/create', [DataController::class, 'create']);
    Route::post('/home/store', [DataController::class, 'store']);
    Route::get('/editdata/{id}/edit', [DataController::class, 'edit']);
    Route::put('/{id}', [DataController::class, 'update']);
    Route::delete('/{id}', [DataController::class, 'delete']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
