<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormCrud;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', [FormCrud::class, 'index'])->name('dashboard');

    Route::post('/create-form', [FormCrud::class, 'create'])->name('create.form');
    Route::get('/manage-form', [FormCrud::class, 'manage'])->name('manage.form');
    Route::get('/edit-form/{id}', [FormCrud::class, 'edit'])->name('edit.form');
    Route::post('/update-form/{id}', [FormCrud::class, 'update'])->name('update.form');
    Route::get('/update-form/{id}', [FormCrud::class, 'delete'])->name('delete.form');

});
