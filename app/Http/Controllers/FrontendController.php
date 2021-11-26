<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
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
        $blogs = Blog::all();
        $categories = Category::all();
        return view('Frontend.index',compact('codingSkills','designSkills','knowledges','certificates','blogs','categories'));
    }
    public function searchByCategory($cat_id){
        $categories = Category::all();
        $designSkills = DesignSkill::all();
        $knowledges = Knowledge::all();
        $certificates = Certificate::all();
        $codingSkills = CodingSkill::all();
        $blogs = Blog::all();
        $blogs = Blog::where('category_id','=',$cat_id)->get();
        return view('Frontend.index',compact('codingSkills','designSkills','knowledges','certificates','blogs','categories'));
    }
}
