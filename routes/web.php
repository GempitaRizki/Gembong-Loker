<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Partials\LowonganKerjaController;
use App\Http\Controllers\Admin\Partials\CompanyController;
use App\Http\Controllers\Admin\Partials\UsersController;
use App\Http\Controllers\Partials\ForbiddenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/AccessForbidden', [ForbiddenController::class, 'index'])->name('forbidden');

Route::get('/', [UserController::class, 'index'])->name('dashboard.user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//ADMIN
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.index');

    //lowongan kerja
    Route::get('/admin/lowongan', [LowonganKerjaController::class, 'index'])->name('loker.index');
    Route::get('/admin/lowongan/add-data', [LowonganKerjaController::class, 'addIndex'])->name('loker.addData');
    Route::post('/admin/lowongan/add-data', [LowonganKerjaController::class, 'addData'])->name('add-data-loker');

    Route::get('/admin/lowongan/{id}/edit', [LowonganKerjaController::class, 'edit'])->name('loker.edit');
    Route::put('/admin/lowongan/{id}', [LowonganKerjaController::class, 'update'])->name('loker.update');
    Route::delete('/admin//lowongan/{id}', [LowonganKerjaController::class, 'destroy'])->name('loker.destroy');

    //company
    Route::get('/admin/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/admin/company/add-data', [CompanyController::class, 'addIndex'])->name('company.addData');
    Route::post('/admin/company/add-data', [CompanyController::class, 'addData'])->name('add-data-company');


    //user
    Route::get('/admin/users', [UsersController::class, 'index'])->name('user.index');
    Route::get('/admin/user/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('/admin//user/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/admin//user/{id}', [UsersController::class, 'destroy'])->name('user.destroy');
});


require __DIR__ . '/auth.php';
