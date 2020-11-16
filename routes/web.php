<?php

use Illuminate\Support\Facades\Route;

Route::get('/list', [\App\Http\Controllers\controladorpersonas::class, 'list'])->name('list');
Route::post('/addpersonas', [\App\Http\Controllers\controladorpersonas::class, 'addpersonas'])->name('addpersonas');
Route::get('/', function () {
    return view('welcome');
});
