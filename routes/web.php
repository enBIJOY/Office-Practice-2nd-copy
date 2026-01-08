<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LayoutController;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.index');
});
Route::get('feature', [LayoutController::class, 'feature'])->name('layout.feature');


Route::post('/create', [CrudController::class, 'create'])->name('create');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::get('/show', [CrudController::class, 'show'])->name('show');
Route::delete('/product/delete/{id}', [CrudController::class, 'productDelete'])->name('product.delete');

