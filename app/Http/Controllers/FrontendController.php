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
        return view('Frontend.home',compact('codingSkills','designSkills','knowledges','certificates','blogs','categories','portfolios'));
    }

    public function about(){
        $blogs = Blog::get();
        return view('Frontend.blog',compact('blogs'));
    }

    public function resume(){
        $blogs = Blog::get();
        return view('Frontend.blog',compact('blogs'));
    }

    public function portfolio(){
        $blogs = Blog::get();
        return view('Frontend.blog',compact('blogs'));
    }

    public function contact(){
        $blogs = Blog::get();
        return view('Frontend.blog',compact('blogs'));
    }

    public function blog(){
        $blogs = Blog::get();
        $categories = Category::all();
        return view('Frontend.blog',compact('blogs','categories'));
    }

    public function blog_detail($id){
        $blog = Blog::find($id);
        return view('Frontend.blog_detail',compact('blog'));
    }

    public function blog_search_by_cat($id){
        $categories = Category::all();
        $category_active = Category::where('id',$id)->first();
        $blogs = Blog::where('category_id',$id)->get();
        return view('Frontend.blog',compact('blogs','categories','category_active'));
    }
}
