<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeControllers;
use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work_History;
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






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $sertifikat = Sertifikat::all();
    $skills = Skill::all();
    $workHistory = Work_History::all();
    $project = Project::all();
    $user = User::all();
    $data = array(
        array('data' => $sertifikat, 'fieldname' => Schema::getColumnListing('sertifikats')),
        array('data' => $skills, 'fieldname' => Schema::getColumnListing('skills')),
        array('data' => $workHistory, 'fieldname' => Schema::getColumnListing('work__histories')),
        array('data' => $project, 'fieldname' => Schema::getColumnListing('projects')),
        array('data' => $user, 'fieldname' => Schema::getColumnListing('users')),
    );
    $json = json_decode(json_encode($data));
    // dd(json_decode($json)[0]->sertifikat);
    return view('dashboard', compact(['data']));
})->name('dashboard');
