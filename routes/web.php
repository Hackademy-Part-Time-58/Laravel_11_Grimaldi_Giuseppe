<?php

use App\Http\Middleware\IsOwner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::get('/',[HomeController::class,'homepage'])->name('homepage');
Route::get('/contacts',[HomeController::class,'contacts'])->name('contatti');
Route::get('/chi-siamo',[HomeController::class,'chiSiamo'])->name('chi.siamo');

// rotte articoli
Route::middleware(['auth'])->group(function(){
    Route::resource('/articles',ArticleController::class)->except('index','show','update','destroy');
    Route::get('/dashboard',[ArticleController::class,'dashboard'])->name('dashboard');
});
Route::resource('/articles',ArticleController::class)->only('index','show');
Route::middleware(['auth',IsOwner::class])->group(function(){
    // Route::delete('/articles/{article}',[ArticleController::class,'destroy'])->name('articles.destroy');
    // Route::put('/articles/{article}',[ArticleController::class,'update'])->name('articles.update');
Route::resource('/articles',ArticleController::class)->only('update','destroy','edit');
});