<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FrontEnd\FrontEndController;
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


Route::get('index',[FrontEndController::class,'index'])->name('mainpage');

Route::get('about',[FrontEndController::class,'about'])->name('about');

Route::get('contact',[FrontEndController::class,'contact'])->name('contact');

Route::get('feature',[FrontEndController::class,'feature'])->name('feature');

Route::middleware(['admin'])->group(function (){
    Route::get('/',function (){
        return view('adminpanel.layout');
    })->name('dashboard');

});



Route::prefix('admin')->group(function (){

    Route::get('login',[MainController::class,'indexLogin'])
        ->name('indexLogin');


    Route::get('/logout',[MainController::class,'logout'])
        ->name('admin.logout');


    Route::post('/login',[MainController::class,'authenticate'])
        ->name('admin.authenticate');
});


Route::middleware(['admin'])->group(function (){
    Route::prefix('admin')->group(function (){

        //project controller
        Route::resource('myproject',ProjectController::class);

    });

});



