<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CodingSkillController;
use App\Http\Controllers\Admin\DesignSkillController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProtfolioController;


Route::get('/', [\App\Http\Controllers\FrontendController::class,'index']);

Route::group(['middleware'=>'admin','auth'],function(){
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
