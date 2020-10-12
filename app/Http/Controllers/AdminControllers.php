<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work_History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            array('tablename' => 'sertifikats', 'data' => $sertifikat, 'fieldname' => Schema::getColumnListing('sertifikats')),
            array('tablename' => 'skills','data' => $skills, 'fieldname' => Schema::getColumnListing('skills')),
            array('tablename' => 'work__histories','data' => $workHistory, 'fieldname' => Schema::getColumnListing('work__histories')),
            array('tablename' => 'projects','data' => $project, 'fieldname' => Schema::getColumnListing('projects')),
            array('tablename' => 'users','data' => $user, 'fieldname' => Schema::getColumnListing('users')),
        );
        return view('admin-pages.dashboard', compact(['data']));
    }
    public function showAkun()
    {
        $user = User::all();
        $data = array(
            array('tablename' => 'users','data' => $user, 'fieldname' => Schema::getColumnListing('users')),
        );
        return view('admin-pages.akun', compact(['data']));
    }
    public function showKarier()
    {
        $work = Work_History::all();
        $data = array(
            array('tablename' => 'work__histories','data' => $work, 'fieldname' => Schema::getColumnListing('work__histories')),
        );
        return view('admin-pages.karier', compact(['data']));
    }
    public function showKemampuan()
    {
        $skill = Skill::all();
        $data = array(
            array('tablename' => 'skills','data' => $skill, 'fieldname' => Schema::getColumnListing('skills')),
        );
        return view('admin-pages.kemampuan', compact(['data']));
    }
    public function showProjek()
    {
        $project = Project::all();
        $data = array(
            array('tablename' => 'projects','data' => $project, 'fieldname' => Schema::getColumnListing('projects')),
        );
        return view('admin-pages.projek', compact(['data']));
    }
    public function showSertifikat()
    {
        $sertifikat = Sertifikat::all();
        $data = array(
            array('tablename' => 'sertifikats', 'data' => $sertifikat, 'fieldname' => Schema::getColumnListing('sertifikats')),
        );
        return view('admin-pages.sertifikat', compact(['data']));
    }
}
