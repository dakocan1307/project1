<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'indexRedirect'])->name('indexRedirect');
Route::middleware('role:admin|manager')->get('/home-root', [App\Http\Controllers\HomeController::class, 'indexRoot'])->name('indexRoot');
Route::middleware('role:admin|manager|spv')->get('/home-spv', [App\Http\Controllers\HomeController::class, 'indexSPV'])->name('indexSPV');
Route::middleware('role:admin|manager|spv|cs_staff|cs_leader')->get('/home-cs', [App\Http\Controllers\HomeController::class, 'indexCS'])->name('indexCS');
Route::middleware('role:admin|manager|spv|ts_staff|ts_leader')->get('/home-ts', [App\Http\Controllers\HomeController::class, 'indexTS'])->name('indexTS');
Route::middleware('role:ts_staff|cs_staff')->get('/home', [App\Http\Controllers\HomeController::class, 'index1'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/tenant',[\App\Http\Controllers\TenantController::class, 'index'])->name('tenant-index');
    Route::any('/tenant/data',[\App\Http\Controllers\TenantController::class, 'data']);
    Route::any('/tenant/data/{komplek}',[\App\Http\Controllers\TenantController::class, 'data']);
    Route::get('/tenant/detail/{tenant_id}',[\App\Http\Controllers\TenantController::class, 'detailTenant'])->name('tenant-detail');
});

