<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/registers', function () {
    return view('auth.register');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\Admin\TaskController;
Route::get("/TaskList",[TaskController::class,'ShowData']);

// Task List CURD
Route::get("/addTask",[TaskController::class,'index']);
Route::post("/addTask",[TaskController::class,'store']);
Route::get("/TaskDelete/{id}",[TaskController::class,'destroy']);
Route::get("TaskUpdate/{id}",[TaskController::class,'edit']);
Route::post("/TaskUpdate/{id}",[TaskController::class,'update']);


// user taskboard
use App\Http\Controllers\users\TaskControllers;

Route::get("/UserTaskList",[TaskControllers::class,'ShowUserTask']);
Route::get("/UserTaskUpdate/{id}",[TaskControllers::class,'edits']);
Route::post("/UserTaskUpdate/{id}",[TaskControllers::class,'updates']);