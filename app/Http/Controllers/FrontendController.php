<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\CodingSkill;
use App\Models\DesignSkill;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public  function  index(){
        $codingSkills = CodingSkill::all();
        $designSkills = DesignSkill::all();
        $knowledges = Knowledge::all();
        $certificates = Certificate::all();
        return view('Frontend.index')->with(compact('codingSkills','designSkills','knowledges','certificates'));
    }
}
