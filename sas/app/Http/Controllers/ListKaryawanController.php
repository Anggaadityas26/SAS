<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListKaryawanController extends Controller
{
    public function ListKaryawan(){
    	return view('admin.pages.listkaryawan');
    }
}
