<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index(){
        $data = Sertifikat::all();
        return view('pages.sertifikat',compact('data'));
    }
}
