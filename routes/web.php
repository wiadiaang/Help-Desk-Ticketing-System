<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Dashboard\DashboardIndex;
use App\Livewire\Backend\User\UserIndex;
use App\Livewire\Backend\Category\CategoryIndex;
use App\Livewire\Auth\Login;
use App\Livewire\Backend\Department\DepartmentIndex;
use App\Livewire\Backend\Priority\PriorityIndex;
use App\Livewire\Backend\Status\StatusIndex;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',Login::class);
Route::get('/dashboard',DashboardIndex::class);

Route::get('/category',CategoryIndex::class);
Route::get('/status',StatusIndex::class);
Route::get('/priority',PriorityIndex::class);
Route::get('/department',DepartmentIndex::class);
Route::get('/user',UserIndex::class);



    




