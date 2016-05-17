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
    		$dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_create_by',session('akses_username'))->take(6)->orderBy('id', 'desc')->paginate(4);
			return \View::make('admin')->with('request',$request)->with('dt_blog_admins',$dt_blog_admin);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }
}
