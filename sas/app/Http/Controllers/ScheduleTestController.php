<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleTestController extends Controller
{
    
	public function ScheduleTest(){
    	return view('admin.pages.scheduletest');
    }

}
