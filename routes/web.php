<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AttendentExport;


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
Route::get('/task',\App\Http\Livewire\DailyTaskComponent::class)->name('index');
Route::get('/task/edit/{task_id}',\App\Http\Livewire\DailytaskEditComponent::class)->name('task.update');
Route::get('/hr',\App\Http\Livewire\HRComponent::class);
Route::get('/productivity',\App\Http\Livewire\ProductivityComponent::class);
Route::get('/download',function(){
    return Excel::download(new AttendentExport, 'attendent.xlsx');
})->name('download');



// Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');


//For User or Customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');


    Route::post ('saveTask', 'App\Http\Controllers\TaskController@store');
    Route::get('/markascompleted/{id}','App\Http\Controllers\Taskcontroller@UpdateTaskAsCompleted');
    Route::get('/markasnotcompleted/{id}','App\Http\Controllers\Taskcontroller@UpdateTaskAsNotCompleted');
    Route::get('/deletetask/{id}','App\Http\Controllers\Taskcontroller@deletetask');
    Route::get('/updatetask/{id}','App\Http\Controllers\Taskcontroller@updatetaskview');
    Route::post('/updatetasks', 'App\Http\Controllers\Taskcontroller@updatetask');

    Route::get('/user/employeeleave',\App\Http\Livewire\User\UserEmployeeLeaveComponent::class)->name('user.employeeleave');
    Route::get('/user/employeeleavetable',\App\Http\Livewire\User\UserEmployeeLeavetableComponent::class)->name('user.employeeleavetable');
    Route::get('/user/attendent',\App\Http\Livewire\User\UserAttendentComponent::class)->name('user.attendent');


    });


    //For the ADMIN
        Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
        Route::get('/admin/dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/admin/hr',\App\Http\Livewire\Admin\HrAdminComponent::class);
        Route::get('/admin/task/add',\App\Http\Livewire\Admin\AdminAddTaskComponent::class)->name('admin.addtask');
        Route::get('/admin/task',\App\Http\Livewire\Admin\AdminTaskComponent::class)->name('admin.task');
        Route::get('/admin/attendent',\App\Http\Livewire\Admin\AdminAttendentComponent::class)->name('admin.attet');


    });
