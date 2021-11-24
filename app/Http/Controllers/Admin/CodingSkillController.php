<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CodingSkillRequest;
use App\Models\CodingSkill;
use Illuminate\Http\Request;

class CodingSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codingskills = CodingSkill::paginate(4);
        return view('admin.skills.CodingSkill.index',compact('codingskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.CodingSkill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CodingSkillRequest $request)
    {
        $coding = CodingSkill::create([
           'name'=>$request->name,
           'percentage'=>$request->percentage,
        ]);
        return redirect()->route('codingskill.index')->with('msg','Successfully Inserted');
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
        $codingSkill = CodingSkill::find($id);
        return view('admin.skills.CodingSkill.edit',compact('codingSkill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CodingSkillRequest $request, $id)
    {
        $codingSkill = CodingSkill::find($id);
        $codingSkill->name = $request->name;
        $codingSkill->percentage = $request->percentage;
        $codingSkill->save();
        return redirect()->route('codingskill.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codingSkill = CodingSkill::find($id);
        $codingSkill->delete();
        return redirect()->route('codingskill.index')->with('delmsg','Successfully Deleted');
    }
}
