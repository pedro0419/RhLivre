<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LacationsLeavesController;
use App\Http\Controllers\PerformanceReviewsController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');

Route::get('/position', [PositionController::class, 'index'])->name('position.index');
Route::get('/position/create', [PositionController::class, 'create'])->name('position.create');
Route::post('/position', [PositionController::class, 'store'])->name('position.store');
Route::get('/position/{id}/edit', [PositionController::class, 'edit'])->name('position.edit');
Route::put('/position/{id}', [PositionController::class, 'update'])->name('position.update');
Route::delete('/position/{id}', [PositionController::class, 'destroy'])->name('position.delete');

Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department', [DepartmentController::class, 'store'])->name('department.store'); 
Route::get('/department/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');

Route::get('/lacations-leaves', [LacationsLeavesController::class, 'index'])->name('lacations-leaves.index');
Route::get('/lacations-leaves/create', [LacationsLeavesController::class, 'create'])->name('lacations-leaves.create');
Route::post('/lacations-leaves', [LacationsLeavesController::class, 'store'])->name('lacations-leaves.store');
Route::get('/lacations-leaves/{id}/edit', [LacationsLeavesController::class, 'edit'])->name('lacations-leaves.edit');  
Route::put('/lacations-leaves/{id}', [LacationsLeavesController::class, 'update'])->name('lacations-leaves.update');
Route::delete('/lacations-leaves/{id}', [LacationsLeavesController::class, 'destroy'])->name('lacations-leaves.delete');

Route::get('/Performance-Reviews', [PerformanceReviewsController::class, 'index'])->name('Performance-Reviews.index');
Route::get('/Performance-Reviews/create', [PerformanceReviewsController::class, 'create'])->name('Performance-Reviews.create');
Route::post('/Performance-Reviews', [PerformanceReviewsController::class, 'store'])->name('Performance-Reviews.store');
Route::get('/Performance-Reviews/{id}/edit', [PerformanceReviewsController::class, 'edit'])->name('Performance-Reviews.edit');  
Route::put('/Performance-Reviews/{id}', [PerformanceReviewsController::class, 'update'])->name('Performance-Reviews.update');
Route::delete('/Performance-Reviews/{id}', [PerformanceReviewsController::class, 'destroy'])->name('Performance-Reviews.delete');

require __DIR__.'/auth.php';
