<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

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
            return redirect('login');
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
            return redirect('login');
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
            return redirect('login');
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
            return redirect('login');
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
            return redirect('login');
        }
    }

    public function master_teacher()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_teacher = \App\dt_teacher::paginate(10);
            return view('master_teacher')->with('data_teacher',$data_teacher);
        }
        else{
            return redirect('login');
        }
    }

    public function save_master_teacher()
    {
        $post = new \App\dt_teacher;
        $post->dt_teacher_nip = Input::get('dt_teacher_nip');
        $post->dt_teacher_name = Input::get('dt_teacher_fname')."|".Input::get('dt_teacher_lname');
        $post->dt_teacher_position = Input::get('dt_teacher_position');
        $post->dt_teacher_for = Input::get('dt_teacher_for');
        $post->dt_teacher_statuslog = Input::get('dt_teacher_statuslog');
        $post->dt_teacher_create_by = session('akses_username');
        $post->dt_teacher_code_absen = Input::get('dt_teacher_nip')."".Input::get('dt_teacher_fname');

        $post->save();

        return redirect(url('manage_teacher/master_teacher'));
    }

    public function edit_master_teacher($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_edit = \App\dt_teacher::find($id);
            $data_teacher = \App\dt_teacher::paginate(10);
            return view('edit_master_teacher')->with('data_teacher',$data_teacher)->with('data_edit',$data_edit);
        }
        else{
            return redirect('login');
        }
    }

    public function save_edit_master_teacher()
    {
        $post = \App\dt_teacher::find(Input::get('id'));
        $post->dt_teacher_nip = Input::get('dt_teacher_nip');
        $post->dt_teacher_name = Input::get('dt_teacher_fname')."|".Input::get('dt_teacher_lname');
        $post->dt_teacher_position = Input::get('dt_teacher_position');
        $post->dt_teacher_for = Input::get('dt_teacher_for');
        $post->dt_teacher_statuslog = Input::get('dt_teacher_statuslog');
        $post->dt_teacher_update_by = session('akses_username');
        $post->dt_teacher_code_absen = Input::get('dt_teacher_nip')."".Input::get('dt_teacher_fname');

        $post->save();

        return redirect(url('manage_teacher/master_teacher'));
    }

    public function delete_master_teacher($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_teacher::find($id)->delete();
            return redirect( url('manage_teacher/master_teacher'));
        }
        else{
            return redirect(url('login'));
        }
    }

}
