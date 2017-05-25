<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddAdminController extends Controller
{
    
	public function AddAdmin(){
    	return view('admin.pages.addadmin');
    }

}
