<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Role;

class SearchController extends Controller
{
     public function search(Request $request )
    {
    	if($request->has('search')){
    		$modules = Module::search($request->get('search'))->get();	
    		 
    	}else{
    		$modules = Module::get();
    	}
        return view('search', compact('modules'));
    }
}
