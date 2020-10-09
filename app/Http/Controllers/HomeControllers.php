<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sertifikat;
use App\Models\Skill;
use App\Models\Work_History;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index()
    {
        $data = Sertifikat::all();
        $skills = Skill::all();
        $workHistory = Work_History::all();
        $project = Project::all();
        return view('index', compact(['data', 'skills', 'workHistory', 'project']));
    }
}
