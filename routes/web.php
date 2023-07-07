<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CodingSkillController;
use App\Http\Controllers\Admin\DesignSkillController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProtfolioController;
use App\Http\Controllers\Frontend\HomeController;


Route::get('/', [\App\Http\Controllers\FrontendController::class,'index'])->name('home');
// Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/resume', [App\Http\Controllers\FrontendController::class, 'resume'])->name('resume');
Route::get('/portfolio', [App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/blog-details/{id}', [App\Http\Controllers\FrontendController::class, 'blog_detail'])->name('blog_detail');
Route::get('/searchByCategory/{id}', [App\Http\Controllers\FrontendController::class, 'blog_search_by_cat'])->name('blog_search_by_cat');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    //Skills
    Route::resource('codingskill', CodingSkillController::class);
    Route::resource('designskill', DesignSkillController::class);
//Knowledge
    Route::resource('knowledge', KnowledgeController::class);
//certificate
    Route::resource('certificate', CertificateController::class);
//Blog
    Route::resource('blog',BlogController::class);
//Category
    Route::resource('category', CategoryController::class);
//protfolio
    Route::resource('portfolio', ProtfolioController::class);
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

