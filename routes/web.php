<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/animals', [AnimalController::class, 'index'])->name('pages.admin.index');
Route::get("admin/animals/create", [AnimalController::class, 'create'])->name("pages.admin.create");
Route::post("admin/animals", [AnimalController::class, 'store'])->name("pages.admin.store");

Route::get("admin/animals/deleted", [AnimalController::class, 'deletedAnimals'])->name("animals.deleted");
Route::patch("admin/animals/{id}/restore", [AnimalController::class, 'restore'])->name("animal.restore");
Route::delete("admin/animals/{id}/delete", [AnimalController::class, "permanentDelete"])->name("animals.permanent.delete");
Route::put("admin/animals/{animal}/edit", [AnimalController::class, 'update'])->name("admin.animal.update");
Route::get("admin/animals/{animal}/edit", [AnimalController::class, 'edit'])->name("admin.animal.edit");
Route::delete("admin/animals/{id}", [AnimalController::class, 'destroy'])->name("admin.animal.destroy");

Route::get('admin/animals/{id}', [AnimalController::class, 'show'])->name('pages.admin.show');
