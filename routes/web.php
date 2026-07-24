<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PelangganController;
Route::get('/', fn()=>view('landing'))->name('landing');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::resource('mobil', MobilController::class)->except('show');
Route::resource('pelanggan', PelangganController::class)->except('show');
