<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');
//Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::prefix('tasks')
  ->name('tasks.')
  ->controller(TaskController::class)
  ->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{id}/edit', 'edit')->name('edit');
  });
