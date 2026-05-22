<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;



 // Routes pour les pages publiques 
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/articles', [MainController::class, 'articles'])->name('articles.index');
    Route::get('/posts',[MainController::class, 'articles'])->name('articles.show');
    Route::get('/categories', [MainController::class, 'categories'])->name('categories.index');
    Route::get('/about', [MainController::class, 'about'])->name('about');

// routes pour le dashboard admin
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/articles', [DashboardController::class, 'articles'])->name('articles');
        Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
        Route::get('/utilisateurs', [DashboardController::class, 'users'])->name('users');
        Route::get('/commentaires', [DashboardController::class, 'comments'])->name('comments');
        Route::get('/reglages', [DashboardController::class, 'settings'])->name('settings');
    });

