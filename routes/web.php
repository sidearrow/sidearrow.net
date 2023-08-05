<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');

Route::get('/tool', \App\Http\Controllers\Tool\IndexController::class)->name('tool_index');

Route::get('/tool/date/add-subtract', \App\Http\Controllers\Tool\Date\AddSubtract\IndexController::class)->name('tool_date_add-subtract_index');
Route::post('/tool/date/add-subtract', \App\Http\Controllers\Tool\Date\AddSubtract\ExecuteController::class)->name('tool_date_add-subtract_execute');

Route::get('/sitemap.txt', \App\Http\Controllers\SitemapController::class);
