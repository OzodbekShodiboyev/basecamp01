<?php

use App\Http\Controllers\ProductController;
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
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('product', ProductController::class);
Route::get('/dashboard',[ProductController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/addProject',[ProductController::class,'add']);
Route::post('addPr',[ProductController::class,'store']);
Route::get('edit-pr/{id}',[ProductController::class, 'edit']);
Route::post('updatePr',[ProductController::class,'update']);
// Route::post('/projectDestroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
// Route::delete('/projectDestroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
require __DIR__.'/auth.php';
