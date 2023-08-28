<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectorController;
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
    return redirect('dashboard');
});


//Auth
Route::get('/login', [AuthController::class, 'viewlogin'])->name('login');
Route::post('/login', [AuthController::class, 'proccesslogin']);
Route::get('/logout', [AuthController::class, 'proccesslogout']);


Route::group(['middleware' => ['auth', 'authorization']], function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'view'])->name('dashboard_view');
    });

    Route::prefix('/authorization')->group(function () {
        Route::get('/', [AuthorizationController::class, 'index'])->name('authorization_view');
        Route::get('/data/{users_role}', [AuthorizationController::class, 'data'])->name('authorization_view_data');
        Route::post('/', [AuthorizationController::class, 'update'])->name('authorization_add');
    });

    Route::prefix('/role')->group(function () {
        Route::get('/', [RoleController::class, 'view'])->name('role_view_index');
        Route::get('/data', [RoleController::class, 'data'])->name('role_view_data');
        Route::get('/add', [RoleController::class, 'addView'])->name('role_add');
        Route::get('/edit/{id}', [RoleController::class, 'editView'])->name('role_edit');
        Route::post('/', [RoleController::class, 'addPost'])->name('role_add_post');
        Route::patch('/{id}', [RoleController::class, 'editPatch'])->name('role_edit_patch');
        Route::delete('/{id}', [RoleController::class, 'delete'])->name('role_delete');
    });

    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'view'])->name('admin_view_index');
        Route::get('/data', [AdminController::class, 'data'])->name('admin_view');
        Route::get('/trash', [AdminController::class, 'trash'])->name('admin_view');
        Route::get('/add', [AdminController::class, 'addView'])->name('admin_add');
        Route::get('/edit/{id}', [AdminController::class, 'editView'])->name('admin_edit');
        Route::post('/add', [AdminController::class, 'addPost'])->name('admin_add_post');
        Route::post('/edit/{id}', [AdminController::class, 'editPatch'])->name('admin_edit_patch');
        Route::patch('/restore/{id}', [AdminController::class, 'restore'])->name('admin_edit_restore');
        Route::patch('/reset-password/{id}', [AdminController::class, 'resetPassword'])->name('admin_edit_reset');
        Route::delete('/{id}', [AdminController::class, 'delete'])->name('admin_delete');
        Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('admin_delete');
    });

    Route::prefix('/sector')->group(function () {
        Route::get('/', [SectorController::class, 'view'])->name('sector_view');
        Route::get('/{id}', [SectorController::class, 'detail'])->name('sector_view_detail');
    });

    Route::prefix('/family')->group(function () {
        Route::get('/', [FamilyController::class, 'view'])->name('family_view');
        Route::get('/add', [FamilyController::class, 'addView'])->name('family_add');
        Route::get('/{id}', [FamilyController::class, 'detail'])->name('family_view_detail');
        Route::get('/{id}/edit', [FamilyController::class, 'editView'])->name('family_edit');
        Route::post('/', [FamilyController::class, 'create'])->name('family_add_post');
        Route::patch('/{id}', [FamilyController::class, 'update'])->name('family_edit_patch');
    });

    Route::prefix('/person')->group(function () {
        Route::get('/', [PersonController::class, 'view'])->name('person_view');
        Route::get('/add', [PersonController::class, 'addView'])->name('person_add');
        Route::get('/{id}', [PersonController::class, 'detail'])->name('person_view_detail');
        Route::get('/{id}/edit', [PersonController::class, 'editView'])->name('person_edit');
        Route::post('/', [PersonController::class, 'create'])->name('person_add_post');
        Route::patch('/{id}', [PersonController::class, 'update'])->name('person_edit_patch');
    });

    Route::prefix('/activity')->group(function () {
        Route::get('/', [ActivityController::class, 'view'])->name('activity_view');
    });
});
