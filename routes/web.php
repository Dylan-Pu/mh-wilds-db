<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\MonsterController; 
use App\Controllers\TestAPI;

Route::get('/', [MonsterController::class, 'index'])->name('home');
Route::get('/monster/{slug}', [MonsterController::class, 'show'])->name('monster.show');