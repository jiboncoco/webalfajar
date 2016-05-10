<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function master_post(Request $request)
    {
    	session_start();
    	if(isset($_SESSION['logged_in'])){
    		$m_blog = \App\m_blog::all();
    		$m_kelas = \App\m_kelas::all();
			return \View::make('master_post')->with('request',$request)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }

    public function save_post()
    {
    	$post = new \App\dt_blog;
    	$post->dt_blog_type = Input::get('dt_blog_type');
    	$post->dt_blog_date_event = Input::get('dt_blog_date_event');
    	$post->dt_blog_title = Input::get('dt_blog_title');
    	$post->dt_blog_text = Input::get('dt_blog_text');
    	$post->dt_blog_for = Input::get('dt_blog_for');
    	$post->dt_blog_by = session('akses_type');
    	$post->dt_blog_create_by = session('akses_username');

    	$post->save();

		return redirect(url('manage_post/master_post'));
    }
}
