<?php

use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UpdateProfileInformationController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class);



Route::middleware('auth')->group(function(){


    Route::resource('tasks', TaskController::class);

// Route::get('tasks', [TaskController::class,'index'])->name('tasks.index');;
// Route::post('tasks', [TaskController::class,'store'])->name('tasks.store');
// Route::get('tasks/{id}/edit', [TaskController::class,'edit']);
// Route::put('tasks/{id}', [TaskController::class,'update']);
// Route::delete('tasks/{id}', [TaskController::class,'destroy']);

    Route::get('timeline', TimelineController::class)->name('timeline');

    Route::post('status',[StatusController::class,'store'])->name('statuses.store');

    Route::get('explore', ExploreUserController::class )->name('users.index');

    Route::get('datatable_task',[TaskController::class,'datatables'])->name('datatables.task');

    Route::get('get_detail_users/{id}', [TaskController::class, 'get_detail_user'])->name('get_detail_user.task');




    Route::prefix('profile')->group(function () {

        Route::get('edit', [UpdateProfileInformationController::class, 'edit'])->name('profile.edit');

        Route::put('update', [UpdateProfileInformationController::class, 'update'])->name('profile.update');


        Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');

        Route::put('password/edit', [UpdatePasswordController::class, 'update']);


        Route::get('{user}/{following}', [FollowingController::class , 'index'])->name('following.index');
       
        Route::post('{user}', [FollowingController::class , 'store'])->name('following.store');
    
        Route::get('{user}',ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');   

        

    });

    
});



require __DIR__.'/auth.php';
