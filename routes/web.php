<?php

use App\Http\Controllers\SertifikatController;
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

Route::get('/', function () {
    $data = Sertifikat::all();
    $skills = Skill::all();
    $workHistory = Work_History::all();
    return view('index', compact(['data', 'skills','workHistory']));
});
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
