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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes permissions

Route::middleware(['auth'])->group(function () {
    //Roles
    Route::post('roles/store', [App\Http\Controllers\RoleController::class, 'store'])
        ->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', [App\Http\Controllers\RoleController::class, 'index'])
        ->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', [App\Http\Controllers\RoleController::class, 'create'])
        ->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', [App\Http\Controllers\RoleController::class, 'update'])
        ->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', [App\Http\Controllers\RoleController::class, 'show'])
        ->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', [App\Http\Controllers\RoleController::class, 'destroy'])
        ->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])
        ->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Productos
    Route::post('products/store', [App\Http\Controllers\ProductController::class, 'store'])
        ->name('products.store')
        ->middleware('permission:products.create');

    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])
        ->name('products.index')
        ->middleware('permission:products.index');

    Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create'])
        ->name('products.create')
        ->middleware('permission:products.create');

    Route::put('products/{product}', [App\Http\Controllers\ProductController::class, 'update'])
        ->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('products/{product}', [App\Http\Controllers\ProductController::class, 'show'])
        ->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('products/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])
        ->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])
        ->name('products.edit')
        ->middleware('permission:products.edit');

    //Usuarios
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])
        ->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update'])
        ->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])
        ->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])
        ->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])
        ->name('users.edit')
        ->middleware('permission:users.edit');
});
