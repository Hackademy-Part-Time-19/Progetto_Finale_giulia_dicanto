<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RevisorController;
use App\Http\Middleware\UserIsAdmin;
use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use \App\Models\Article;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/article/category/{category_id}', [CategoryController::class, "CategoryIndex"])->name("category");

Route::resource('article', ArticleController::class);
Route::resource('category', CategoryController::class);


Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::patch('/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::patch('/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::patch('/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
});

Route::middleware(['revisor'])->prefix('revisor')->group(function () {
    Route::get('/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::post('/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

