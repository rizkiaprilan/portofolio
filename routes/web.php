<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeControllers;
use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work_History;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

Route::get('/', [HomeControllers::class, 'index'])->name('home');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send-email');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminControllers::class, 'dashboard'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/akun', [AdminControllers::class, 'showAkun'])->name('akun.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/Karier', [AdminControllers::class, 'showKarier'])->name('karier.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/projek', [AdminControllers::class, 'showProjek'])->name('projek.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/kemampuan', [AdminControllers::class, 'showKemampuan'])->name('kemampuan.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/sertifikat', [AdminControllers::class, 'showSertifikat'])->name('sertifikat.show');
Route::get('/profile', function(){
    return view('profile.show');
})->name('profile');
