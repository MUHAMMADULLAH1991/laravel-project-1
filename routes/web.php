<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[HomePageController::class, 'index']);
Route::get('/contact-us',[HomePageController::class, 'contactUs']);