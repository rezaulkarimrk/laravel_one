<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentsController;

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
//  CRUDE
Route::get('class', [App\Http\Controllers\Admin\ClassController::class, 'index'])->name('class.index');
Route::get('create/class', [App\Http\Controllers\Admin\ClassController::class, 'create'])->name('create.class');
Route::post('store/class', [App\Http\Controllers\Admin\ClassController::class, 'store'])->name('store.class');
Route::get('class/delete/{id}', [App\Http\Controllers\Admin\ClassController::class, 'delete'])->name('class.delete');


// Students Crude
Route::resource('students', StudentsController::class);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
