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

    public function manage_all_account()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $akses = \App\akses::all();
            $dt_teacher = \App\dt_teacher::all();
            $dt_parent = \App\dt_parent::all();
            $dt_student = \App\dt_student::all();
            return \View::make('manage_all_account')->with('aksess', $akses)->with('dt_teachers', $dt_teacher)->with('dt_parents', $dt_parent)->with('dt_students', $dt_student);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_account()
    {
        $post = new \App\akses;
        $post->akses_type = Input::get('akses_type');
        $post->akses_code = Input::get('akses_code');
        $post->akses_status_data = Input::get('akses_status_data');
        $post->akses_username = Input::get('akses_username');
        $post->akses_password = Input::get('akses_password');
        $post->akses_create_by = session('akses_username');

        $post->save();

        return redirect(url('manage_account/all_account'));
    }

    public function edit_account($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $akses_edit = \App\akses::find($id);
        $akses = \App\akses::paginate(5);
        return \View::make('edit_account')->with('aksess', $akses)->with('akses_edit', $akses_edit);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_account()
    {
        $post = \App\akses::find(Input::get('id'));
        $post->akses_type = Input::get('akses_type');
        $post->akses_code = Input::get('akses_code');
        $post->akses_status_data = Input::get('akses_status_data');
        $post->akses_username = Input::get('akses_username');
        $post->akses_password = Input::get('akses_password');
        $post->akses_update_by = session('akses_username');

        $post->save();

        return redirect(url('manage_account/all_account'));
    }

    public function delete_account($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\akses::find($id)->delete();
            return redirect( url('manage_account/all_account'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function manage_parent()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_parent = \App\dt_parent::all();
            $data_student = \App\dt_student::all();
            return \View::make('master_parent')->with('data_parent', $data_parent)->with('data_student', $data_student);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_parent()
    {
        $post = new \App\dt_parent;
        $post->dt_parent_nisn = Input::get('dt_parent_nisn');
        $post->dt_parent_name = Input::get('dt_parent_fname')."|".Input::get('dt_parent_lname');
        $post->dt_parent_statuslog = Input::get('dt_parent_statuslog');
        $post->save();

        return redirect(url('manage_parent/master_parent'));
    }

    public function edit_parent($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $data_parent = \App\dt_parent::all();
        $data_edit = \App\dt_parent::find($id);
        $data_student = \App\dt_student::all();
        return \View::make('edit_parent')->with('data_parent', $data_parent)->with('data_student', $data_student)->with('data_edit', $data_edit);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_parent()
    {
        $post = \App\dt_parent::find(Input::get('id'));
        $post->dt_parent_nisn = Input::get('dt_parent_nisn');
        $post->dt_parent_name = Input::get('dt_parent_fname')."|".Input::get('dt_parent_lname');
        $post->dt_parent_statuslog = Input::get('dt_parent_statuslog');
        $post->save();

        return redirect(url('manage_parent/master_parent'));
    }

    public function delete_parent($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_parent::find($id)->delete();
            return redirect( url('manage_parent/master_parent'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function my_post()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_create_by',session('akses_username'))->take(6)->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins',$dt_blog_admin);
        }
        else{
            return redirect('login');
        }   
    }

    public function master_type_post()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $m_blog = \App\m_blog::all();
        return \View::make('master_type_post')->with('m_blogs', $m_blog);
        }
        else{
            return redirect(url('login'));
        }
    }


    public function save_master_type_post()
    {
        $post = new \App\m_blog;
        $post->m_blog_name_type = Input::get('m_blog_name_type');
        $post->m_blog_status = Input::get('m_blog_status');
        $post->save();

        return redirect(url('manage_post/master_type_post'));
    }

    public function edit_master_type_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $m_blog = \App\m_blog::find($id);
        $blog = \App\m_blog::all();
        return \View::make('edit_master_type_post')->with('m_blogs', $m_blog)->with('blog', $blog);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_master_type_post()
    {
        $post = \App\m_blog::find(Input::get('id'));
        $post->m_blog_name_type = Input::get('m_blog_name_type');
        $post->m_blog_status = Input::get('m_blog_status');
        $post->save();

        return redirect(url('manage_post/master_type_post'));
    }

    public function delete_master_type_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\m_blog::find($id)->delete();
            return redirect( url('manage_post/master_type_post'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function master_class_post()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $m_kelas = \App\m_kelas::all();
        return \View::make('master_class_post')->with('m_kelass', $m_kelas);
        }
        else{
            return redirect(url('login'));
        }
    }


    public function save_master_class_post()
    {
        $post = new \App\m_kelas;
        $post->m_kelas_name = Input::get('m_kelas_name');
        $post->m_kelas_status = Input::get('m_kelas_status');
        $post->save();

        return redirect(url('manage_post/master_class_post'));
    }

    public function edit_master_class_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $m_kelas = \App\m_kelas::find($id);
        $kelas = \App\m_kelas::all();
        return \View::make('edit_master_class_post')->with('m_kelass', $m_kelas)->with('kelas', $kelas);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_master_class_post()
    {
        $post = \App\m_kelas::find(Input::get('id'));
        $post->m_kelas_name = Input::get('m_kelas_name');
        $post->m_kelas_status = Input::get('m_kelas_status');
        $post->save();

        return redirect(url('manage_post/master_class_post'));
    }

    public function delete_master_class_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\m_kelas::find($id)->delete();
            return redirect( url('manage_post/master_class_post'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function teacher_sch()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $teacher_sch = \App\dt_sch::all();
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('teacher_sch')->with('teacher_sch',$teacher_sch)->with('dt_teachers',$dt_teacher);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_teacher_sch()
    {
        $post = new \App\dt_sch;
        $post->sch_code = Input::get('sch_code');
        $post->sch_days = Input::get('sch_days');
        $post->sch_month = Input::get('sch_month');
        $post->sch_year = Input::get('sch_year');
        $post->sch_time = Input::get('sch_time');
        $post->sch_task = Input::get('sch_task');
        $post->sch_create_by = session('akses_username');
        $post->save();

        return redirect(url('manage_teacher/schedule_teacher'));
    }

    public function edit_teacher_sch($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $teachersch = \App\dt_sch::all();
            $teacher_sch = \App\dt_sch::find($id);
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('edit_teacher_sch')->with('teacher_sch',$teacher_sch)->with('teachersch',$teachersch)->with('dt_teachers',$dt_teacher);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_teacher_sch()
    {
        $post = \App\dt_sch::find(Input::get('id'));
        $post->sch_code = Input::get('sch_code');
        $post->sch_days = Input::get('sch_days');
        $post->sch_month = Input::get('sch_month');
        $post->sch_year = Input::get('sch_year');
        $post->sch_time = Input::get('sch_time');
        $post->sch_task = Input::get('sch_task');
        $post->sch_create_by = session('akses_username');
        $post->save();

        return redirect(url('manage_teacher/schedule_teacher'));
    }

    public function delete_teacher_sch($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_sch::find($id)->delete();
            return redirect(url('manage_teacher/schedule_teacher'));        }
        else{
            return redirect(url('login'));
        }
    }
    
    public function master_feature()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $feature = \App\dt_feature::all();
            return \View::make('master_feature')->with('feature',$feature);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_feature()
    {
        $post = new \App\dt_feature;
        $post->feature_to = Input::get('feature_to');
        $post->feature_for = Input::get('feature_for');
        $post->feature_text = Input::get('feature_text');
        $post->feature_status = Input::get('feature_status');
        $post->feature_create_by = session('akses_username');
        $post->save();

        return redirect(url('manage_feature/master_feature'));
    }
    

}
