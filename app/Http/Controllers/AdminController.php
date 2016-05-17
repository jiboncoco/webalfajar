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
    		$dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_create_by',session('akses_username'))->take(6)->orderBy('id', 'desc')->paginate(6);
			return \View::make('admin')->with('request',$request)->with('dt_blog_admins',$dt_blog_admin);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }

            public function manage_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all')->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
        else{
            $dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all')->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
    }    

    public function manage_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
        else{
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
    }    

    public function manage_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
        else{
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
    }

    public function manage_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
        else{
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
    }    
    
    public function manage_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
        else{
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin);
        }
    }
}
