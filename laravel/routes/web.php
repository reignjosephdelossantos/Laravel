<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/resume/1');
});
Route::get('/resume/{id}', [ResumeController::class, 'show']);

