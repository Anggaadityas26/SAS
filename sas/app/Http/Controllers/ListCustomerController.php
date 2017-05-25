<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCustomerController extends Controller
{
    
	public function ListCustomer(){
    	return view('admin.pages.listcustomer');
    }

}
