<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
    	session_start();
    	if(isset($_SESSION['logged_in'])){
    		
			return view('admin')->with('request',$request);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }
}
