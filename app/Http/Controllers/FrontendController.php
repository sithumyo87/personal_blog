<?php

namespace App\Http\Controllers;

use App\Models\CodingSkill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public  function  index(){
        $codingSkills = CodingSkill::all();

        return view('Frontend.index')->with(compact('codingSkills'));
    }
}
