<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	public function admin()
    {
    	session_start();
    	if(isset($_SESSION['logged_in'])){
			return view('admin');
		}
		else{
			return redirect('login');
		}	
    }
}
