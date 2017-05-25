<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCustomerController extends Controller
{
    
	public function NewCustomer(){
    	return view('admin.pages.newcustomer');
    }

}
