<?php

namespace App\Http\Controllers;

use App\Module;
use App\Role;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('clients.index',compact('modules',$modules));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('modules.create');

        $roles = Role::all();
        return view('modules.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modules = Module::all();
        $roles = Role::all();
        $module = Module::create([ 
            'leadership_competence'=> $request->leadership_competence,
            'leadership_sub_competence'=> $request->leadership_sub_competence,
            'level'=> $request->level,
            'learn_url'=> $request->learn_url,
            'certificate_url'=> $request->certificate_url,
            'moscow'=> $request->moscow,
            'course_date'=> $request->course_date,
            'description'=> $request->description,
            'role_id'=> $request->role_id,
        ]);
        
        return view('clients.index',compact('roles','modules'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::find($id);
        $roles = Role::all();
        return view('modules.edit',compact('module', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $modules = Module::all();
        $roles = Role::all();
		
        $module->leadership_competence = $request->leadership_competence;
        $module->leadership_sub_competence = $request->leadership_sub_competence;
        $module->level = $request->level;
        $module->learn_url = $request->learn_url;
        $module->certificate_url = $request->certificate_url;
        $module->moscow = $request->moscow;
        $module->course_date = $request->course_date;
        $module->description = $request->description;
        $module->role_id = $request->role_id;
          
        $module->update();

        $request->session()->flash('message', 'Successfully modified the module!');
        //return view('clients.index',compact('roles','modules'));
        return redirect('/clients');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();
        
        $roles = Role::all();
        $modules = Module::all();
        return view('clients.index',compact('roles','modules'));
    }
}
