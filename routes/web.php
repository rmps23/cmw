<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\ContactController::class, 'index'])->name('index');

Route::middleware('auth')->group(function(){

    Route::get('/addcontact', [App\Http\Controllers\ContactController::class, 'addcontact'])->name('add');
    Route::post('/addcontact', [App\Http\Controllers\ContactController::class, 'store'])->name('addcontact.store');
    Route::get('/{contact}/view', [App\Http\Controllers\ContactController::class, 'view'])->name('contact.view');
    Route::patch('/{contact}/update', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
    Route::get('/{contact}/edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
    Route::delete('/{contact}/destroy', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');  

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

