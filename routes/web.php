<?php

use App\Http\Controllers\AnimalController;
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

Route::get('admin/animals', [AnimalController::class, 'index'])->name('pages.admin.index');

Route::get("admin/animals/create", [AnimalController::class, 'create'])->name("pages.admin.create");
Route::post("admin/animals", AnimalController::class, "store")->name("pages.admin.store");
Route::get('admin/animals/{id}', [AnimalController::class, 'show'])->name('pages.admin.show');

