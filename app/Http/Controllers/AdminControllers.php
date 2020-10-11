<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work_History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminControllers extends Controller
{
    public function dashboard()
    {
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
        return view('admin-pages.dashboard', compact(['data']));
    }
}
