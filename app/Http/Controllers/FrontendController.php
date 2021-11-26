<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\CodingSkill;
use App\Models\DesignSkill;
use App\Models\Knowledge;
use App\Models\Protfolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public  function  index(){
        $codingSkills = CodingSkill::all();
        $designSkills = DesignSkill::all();
        $knowledges = Knowledge::all();
        $certificates = Certificate::all();
        $blogs = Blog::all();
        $categories = Category::all();
        $portfolios = Protfolio::all();
        return view('Frontend.index',compact('codingSkills','designSkills','knowledges','certificates','blogs','categories','portfolios'));
    }
}
