<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Protfolio;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Protfolio::paginate(5);
        return view('admin.Portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->image->store('public/portfolio');
        Protfolio::create([
            'name'=>$request->name,
            'url'=>$request->url,
            'image'=>$path,
        ]);
        return redirect()->route('portfolio.index')->with('msg','successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Protfolio::find($id);
        return view('admin.Portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Protfolio::find($id);
        if($request->has('image')){
            $path = $request->image->store('public/portfolio');
        }else{
            $path = $portfolio->image;
        }
        $portfolio->name = $request->name;
        $portfolio->url = $request->url;
        $portfolio->image = $path;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Protfolio::find($id);
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('delmsg','Successfully Deleted');
    }
}
