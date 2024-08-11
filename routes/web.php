<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/search/travel', [PublicController::class, 'searchTravel'])->name('travel.searched');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
Route::get('/contactus', [PublicController::class, 'contactus'])->name('contactus');


Route::get('/travel/create',[TravelController::class,'create'])->name('travel.create');
Route::get('/travel/index',[TravelController::class,'index'])->name('travel.index');
Route::get('/travel/show/{travel}',[TravelController::class,'show'])->name('travel.show');
Route::get('/travel/category/{category}',[TravelController::class,'byCategory'])->name('travel.category');
Route::get('/travel/region/{region}', [TravelController::class, 'region'])->name('travel.region');


Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{travel}',[RevisorController::class,'accept'])->name('accept');
Route::patch('/reject/{travel}',[RevisorController::class,'reject'])->name('reject');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

