<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function master_post(Request $request)
    {
    	session_start();
    	if(isset($_SESSION['logged_in'])){
			return view('master_post')->with('request',$request);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }
}
