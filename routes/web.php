<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',\App\Http\Livewire\HomeComponent::class);
Route::get('/task',\App\Http\Livewire\DailyTaskComponent::class);
Route::get('/hr',\App\Http\Livewire\HRComponent::class);
Route::get('/productivity',\App\Http\Livewire\ProductivityComponent::class);



// Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');


//For User or Customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');


    });


    //For the ADMIN
        Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
        Route::get('/admin/dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/admin/hr',\App\Http\Livewire\Admin\HrAdminComponent::class);
        Route::get('/admin/task/add',\App\Http\Livewire\Admin\AdminAddTaskComponent::class)->name('admin.addtask');
        Route::get('/admin/task',\App\Http\Livewire\Admin\AdminTaskComponent::class)->name('admin.task');

    });
