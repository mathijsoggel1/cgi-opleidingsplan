<?php

namespace App\Http\Controllers;

use App\Role;
use App\Client;
use App\Module;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $modules = Module::all();
        return view('clients.index',compact('roles','modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //return view('roles.create');

         $clients = Client::all();
        return view('roles.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $roles = Role::all();
        $modules = Module::all();
        $role = Role::create([ 
            'name' => $request->name, 
            'client_id' => $request->client_id
        ]);
        //dd($role);
        return view('clients.index',compact('roles','modules'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role_id = $role->id;
        $modules = Role::find($role_id)->modules;
        return view('roles.show',compact('role','modules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // get the nerd
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        
        $roles = Role::all();
        $modules = Module::all();
        return view('clients.index',compact('roles','modules'));
    }
}
