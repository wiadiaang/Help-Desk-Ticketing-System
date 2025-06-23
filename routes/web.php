<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Dashboard\DashboardIndex;
use App\Livewire\Backend\User\UserIndex;
use App\Livewire\Backend\Category\CategoryIndex;
use App\Livewire\Backend\Progress\ProgressIndex;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',DashboardIndex::class);
Route::get('/user',UserIndex::class);
Route::get('/category',CategoryIndex::class);
Route::get('/progress',ProgressIndex::class);

    




