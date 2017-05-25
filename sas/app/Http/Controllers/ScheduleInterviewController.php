<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleInterviewController extends Controller
{
    public function ScheduleInterview(){
    	return view('admin.pages.ScheduleInterview');
    }
}
