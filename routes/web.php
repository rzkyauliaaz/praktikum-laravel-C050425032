<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', function () {
    return 'Halaman Artikel';
});

use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
