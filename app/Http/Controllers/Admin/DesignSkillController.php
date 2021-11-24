<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesignSkillRequest;
use App\Models\DesignSkill;
use Illuminate\Http\Request;

class DesignSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designskills = DesignSkill::paginate(4);
        return view('admin.skills.DesignSkill.index',compact('designskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.DesignSkill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignSkillRequest $request)
    {
        $designskill = DesignSkill::create([
            'name'=>$request->name,
            'percentage'=>$request->percentage,
        ]);
        return redirect()->route('designskill.index')->with('msg','Successfully Inserted');
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
        $designskill = DesignSkill::find($id);
        return view('admin.skills.DesignSkill.edit',compact('designskill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DesignSkillRequest $request, $id)
    {
        $designskill = DesignSkill::find($id);
        $designskill->name = $request->name;
        $designskill->percentage = $request->percentage;
        $designskill->save();
        return redirect()->route('designskill.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designskill = DesignSkill::find($id);
        $designskill->delete();
        return redirect()->route('designskill.index')->with('delmsg','Successfully Deleted');
    }
}
