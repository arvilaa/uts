<?php
use App\Http\Controllers\UTSController;

Route::get('/uts', [UTSController::class, 'index'])->name('uts.index');
Route::get('/uts/create', [UTSController::class, 'create']);
Route::post('/uts', [UTSController::class, 'store'])->name('uts.store'); 
