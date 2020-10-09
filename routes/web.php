<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeControllers;
use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\Work_History;
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

Route::get('/',[HomeControllers::class, 'index'])->name('home'); 
Route::post('/send-email',[EmailController::class, 'sendEmail'])->name('send-email'); 





