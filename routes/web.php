<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController as Tamu;
use App\Http\Controllers\KeperluanController as Keperluan;

Route::get('/', [Tamu::class, 'index'])->name('index');
Route::get('/create', [Tamu::class, 'create'])->name('create');
Route::post('/add', [Tamu::class, 'store'])->name('store');
Route::get('/keperluan/{id}', [Tamu::class, 'show'])->name('show');

Route::get('/keperluan/create/{id}', [Keperluan::class, 'create'])->name('create');
Route::post('/keperluan/add/{id}', [Keperluan::class, 'storeKeperluan'])->name('storeKeperluan');
