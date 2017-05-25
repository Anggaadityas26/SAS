<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryDataController extends Controller
{
    public function EntryData(){
    	return view('admin.pages.entrydata');
    }
}
