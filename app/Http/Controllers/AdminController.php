<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	public function admin()
    {
		
		if(session_id() == '') {
	    header ("Location: login");
	    exit;
	}else{
        return view('admin');
	}
    }
}
