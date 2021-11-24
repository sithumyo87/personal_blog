<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CodingSkillController;
use App\Http\Controllers\Admin\DesignSkillController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\CertificateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [\App\Http\Controllers\FrontendController::class,'index']);


//Skills
Route::resource('codingskill', CodingSkillController::class);
Route::resource('designskill', DesignSkillController::class);
//Knowledge
Route::resource('knowledge', KnowledgeController::class);
//certificate
Route::resource('certificate', CertificateController::class);
