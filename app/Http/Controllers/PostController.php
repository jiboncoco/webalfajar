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
        $post->slug = str_slug(Input::get('dt_blog_title'));

        if(Input::hasFile('cover_photo')){
            $cover_photo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('cover_photo')->getClientOriginalExtension();
        
            Input::file('cover_photo')->move(storage_path(),$cover_photo);
            $post->cover_photo = $cover_photo;
        }

    	$post->save();

		return redirect(url('manage_post/master_post'));
    }

    public function save_comment()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $comm = new \App\dt_comment;
        $comm->dt_comment_blog_id = Input::get('dt_comment_blog_id');
        $comm->dt_comment_text = Input::get('dt_comment_text');
        $comm->dt_comment_create_by = session('akses_username');

        $comm->save();

        return redirect()->back();
        }
        else{
            return redirect(url('login'));
        }
    }

    public function edit_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $m_blog = \App\m_blog::all();
            $m_kelas = \App\m_kelas::all();
            $data = array('data'=>\App\dt_blog::find($id));
            return view('edit_post')->with($data)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_edit_post()
    {
        $post = \App\dt_blog::find(Input::get('id'));
        $post->dt_blog_type = Input::get('dt_blog_type');
        $post->dt_blog_date_event = Input::get('dt_blog_date_event');
        $post->dt_blog_title = Input::get('dt_blog_title');
        $post->dt_blog_text = Input::get('dt_blog_text');
        $post->dt_blog_for = Input::get('dt_blog_for');
        $post->dt_blog_by = session('akses_type');
        $post->dt_blog_update_by = session('akses_username');
        $post->slug = str_slug(Input::get('dt_blog_title'));

            if(Input::hasFile('cover_photo')){
            $cover_photo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('cover_photo')->getClientOriginalExtension();
        
            Input::file('cover_photo')->move(storage_path(),$cover_photo);
            $post->cover_photo = $cover_photo;
        }

        $post->save();

        return redirect(url('manage_post/master_post'));
    }

    public function delete_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_blog::find($id)->delete();
            return redirect( url('/'));
        }
        else{
            return redirect(url('login'));
        }
    }


}
