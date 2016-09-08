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
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $dt_blog_admin = \App\dt_blog::orderBy('id', 'desc')->paginate(6);
        $dt_absen = \App\dt_absen::all();
        $maps = \DB::table('dt_maps')->get();
        $cek = $this->cekabsen();       
        return \View::make('admin')
            ->with('request',$request)  
            ->with('dt_absens',$dt_absen)           
            ->with('dt_blog_admins',$dt_blog_admin)         
            ->with('uname',$uname)              
            ->with('absen',$cek)            
            ->with('maps',$maps);
    }
    else{
        return redirect('login')->with('request',$request);
    }   
}
    public function my_post(Request $request)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_create_by',session('akses_email'))->orderBy('id', 'desc')->paginate(6);
            return \View::make('my_post')->with('request',$request)->with('dt_blog_admins',$dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login')->with('request',$request);
        }   
    }

    public function all_post(Request $request)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog = \App\dt_blog::all();
            return \View::make('all_post')->with('request',$request)->with('dt_blogs',$dt_blog)->with('uname',$uname);
        }
        else{
            return redirect('login')->with('request',$request);
        }   
    }

    public function underc()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            
            return \View::make('underc')->with('uname',$uname);
        }
        else{
            return redirect('login');
        }   
    }

            public function manage_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all')->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }    

    public function manage_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }    

    public function manage_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function manage_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }    
    
    public function manage_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('admin')->with('dt_blog_admins', $dt_blog_admin)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function master_teacher()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_teacher = \App\dt_teacher::all();
            return view('master_teacher')->with('data_teacher',$data_teacher)->with('uname',$uname);
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
        $post->dt_teacher_gender = Input::get('dt_teacher_gender');
        $post->dt_teacher_bplace = Input::get('dt_teacher_bplace');
        $post->dt_teacher_dobplace = Input::get('dt_teacher_dobplace');
        $post->dt_teacher_age = Input::get('dt_teacher_age');
        $post->dt_teacher_type = Input::get('dt_teacher_type');
        $post->dt_teacher_bloodtype = Input::get('dt_teacher_bloodtype');
        $post->dt_teacher_religion = Input::get('dt_teacher_religion');
        $post->dt_teacher_email = Input::get('dt_teacher_email');
        $post->dt_teacher_contact = Input::get('dt_teacher_contact');
        $post->dt_teacher_address = Input::get('dt_teacher_address');
        $post->dt_teacher_position = Input::get('dt_teacher_position');
        $post->dt_teacher_for = Input::get('dt_teacher_for');
        $post->dt_teacher_statuslog = Input::get('dt_teacher_statuslog');
        $post->dt_teacher_update_by = session('akses_email');
        $post->dt_teacher_code_absen = Input::get('dt_teacher_nip')."".Input::get('dt_teacher_fname');
         if(Input::hasFile('dt_teacher_name_img')){
            $dt_teacher_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_teacher_name_img')->getClientOriginalExtension();
        
            Input::file('dt_teacher_name_img')->move(storage_path(),$dt_teacher_name_img);
            $post->dt_teacher_name_img = $dt_teacher_name_img;
        }

        $post->save();

        return redirect(url('manage_teacher/master_teacher'));
    }

    public function edit_master_teacher($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_edit = \App\dt_teacher::find($id);
            $data_teacher = \App\dt_teacher::all();
            return view('edit_master_teacher')->with('data_teacher',$data_teacher)->with('data_edit',$data_edit)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function save_edit_master_teacher()
    {
        session_start();
        if(session('akses_type') == "staff" || session('akses_type') == "root" || session('akses_type') == "root+") {
        $post = \App\dt_teacher::find(Input::get('id'));
        $post->dt_teacher_nip = Input::get('dt_teacher_nip');
        $post->dt_teacher_name = Input::get('dt_teacher_fname')."|".Input::get('dt_teacher_lname');
        $post->dt_teacher_gender = Input::get('dt_teacher_gender');
        $post->dt_teacher_bplace = Input::get('dt_teacher_bplace');
        $post->dt_teacher_type = Input::get('dt_teacher_type');
        $post->dt_teacher_dobplace = Input::get('dt_teacher_dobplace');
        $post->dt_teacher_age = Input::get('dt_teacher_age');
        $post->dt_teacher_bloodtype = Input::get('dt_teacher_bloodtype');
        $post->dt_teacher_religion = Input::get('dt_teacher_religion');
        $post->dt_teacher_email = Input::get('dt_teacher_email');
        $post->dt_teacher_contact = Input::get('dt_teacher_contact');
        $post->dt_teacher_address = Input::get('dt_teacher_address');
        $post->dt_teacher_position = Input::get('dt_teacher_position');
        $post->dt_teacher_for = Input::get('dt_teacher_for');
        $post->dt_teacher_statuslog = Input::get('dt_teacher_statuslog');
        $post->dt_teacher_update_by = session('akses_email');
        $post->dt_teacher_code_absen = Input::get('dt_teacher_nip')."".Input::get('dt_teacher_fname');
         if(Input::hasFile('dt_teacher_name_img')){
            $dt_teacher_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_teacher_name_img')->getClientOriginalExtension();
        
            Input::file('dt_teacher_name_img')->move(storage_path(),$dt_teacher_name_img);
            $post->dt_teacher_name_img = $dt_teacher_name_img;
        }

        $post->save();
        return redirect(url('manage_teacher/master_teacher'));
        }
        else{
        $post = \App\dt_teacher::find(Input::get('id'));
        $post->dt_teacher_nip = Input::get('dt_teacher_nip');
        $post->dt_teacher_name = Input::get('dt_teacher_fname')."|".Input::get('dt_teacher_lname');
        $post->dt_teacher_gender = Input::get('dt_teacher_gender');
        $post->dt_teacher_bplace = Input::get('dt_teacher_bplace');
        $post->dt_teacher_dobplace = Input::get('dt_teacher_dobplace');
        $post->dt_teacher_age = Input::get('dt_teacher_age');
        $post->dt_teacher_bloodtype = Input::get('dt_teacher_bloodtype');
        $post->dt_teacher_religion = Input::get('dt_teacher_religion');
        $post->dt_teacher_email = Input::get('dt_teacher_email');
        $post->dt_teacher_contact = Input::get('dt_teacher_contact');
        $post->dt_teacher_address = Input::get('dt_teacher_address');
        $post->dt_teacher_position = Input::get('dt_teacher_position');
        $post->dt_teacher_for = Input::get('dt_teacher_for');
        $post->dt_teacher_statuslog = Input::get('dt_teacher_statuslog');
        $post->dt_teacher_update_by = session('akses_email');
        $post->dt_teacher_code_absen = Input::get('dt_teacher_nip')."".Input::get('dt_teacher_fname');
         if(Input::hasFile('dt_teacher_name_img')){
            $dt_teacher_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_teacher_name_img')->getClientOriginalExtension();
        
            Input::file('dt_teacher_name_img')->move(storage_path(),$dt_teacher_name_img);
            $post->dt_teacher_name_img = $dt_teacher_name_img;
        }
        $post->save();
        return redirect(url('manage_teacher/my_data'));
        }
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            if(session('akses_type') == "staff")
            {
            $akses = \DB::table('akses')->where([
                ['akses_type', '!=', 'staff'],
                ['akses_type', '!=', 'root'],
                ['akses_type', '!=', 'root+']
                ])->get();
            }else if(session('akses_type') == "root")
            {
            $akses = \DB::table('akses')->where([
                ['akses_type', '!=', 'root'],
                ['akses_type', '!=', 'root+']
                ])->get();
            }else
            {
            $akses = \App\akses::all();
            }
            $dt_teacher = \App\dt_teacher::where('dt_teacher_type', 'Teacher')->get();
            $dt_employee = \App\dt_teacher::where('dt_teacher_type', 'Employee')->get();
            $dt_parent = \App\dt_parent::all();
            $dt_staff = \App\akses_log::all();
            $dt_student = \App\dt_student::all();
            return \View::make('manage_all_account')->with('aksess', $akses)->with('dt_teachers', $dt_teacher)->with('dt_employees', $dt_employee)->with('dt_staffs', $dt_staff)->with('dt_parents', $dt_parent)->with('dt_students', $dt_student)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_account()
    {
        session_start();
        $akses_code     = Input::get("akses_code_".Input::get("type_code"));
        $akses_type     = $_POST['akses_type'];
        $akses_email    = Input::get("akses_email_".Input::get("type_email"));

        $akses_status = \DB::table('akses')->where([
                                        ['akses_code', 'like', $akses_code], 
                                        ['akses_email', 'like', $akses_email],
                                        ['akses_type', 'like', $akses_type]
                                    ])->count();
                        if (!empty($akses_status)) {
                        return redirect(url('manage_account/all_account'))->with('status', 'Accounts Already Exists!');
                        }
        else
        {
        $post = new \App\akses;
        $post->akses_code = Input::get("akses_code_".Input::get("type_code"));
        $post->akses_type = Input::get('akses_type');
        // $post->akses_code = Input::get('akses_code');
        $post->akses_email = Input::get("akses_email_".Input::get("type_email"));
        $post->akses_status_data = Input::get('akses_status_data');
        $post->akses_username = Input::get('akses_username');
        $post->akses_password = Input::get('akses_password');
        $post->akses_create_by = session('akses_email');
        $post->akses_imguser = '201606300652525774c1c4bf10a.png';

        $post->save();

        return redirect(url('manage_account/all_account'))->with('status', 'Successfully added account !');
        }
    }

    public function edit_account($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            if(session('akses_type') == "staff")
            {
            $akses = \DB::table('akses')->where([
                ['akses_type', '!=', 'staff'],
                ['akses_type', '!=', 'root'],
                ['akses_type', '!=', 'root+']
                ])->get();
            }else if(session('akses_type') == "root")
            {
            $akses = \DB::table('akses')->where([
                ['akses_type', '!=', 'root'],
                ['akses_type', '!=', 'root+']
                ])->get();
            }else
            {
            $akses = \App\akses::all();
            }
            $dt_teacher = \App\dt_teacher::where('dt_teacher_type', 'Teacher')->get();
            $dt_employee = \App\dt_teacher::where('dt_teacher_type', 'Employee')->get();
            $dt_staff = \App\akses_log::all();
            $dt_parent = \App\dt_parent::all();
            $dt_student = \App\dt_student::all();
            $akses_edit = \App\akses::find($id);
            return \View::make('edit_account')->with('aksess', $akses)->with('dt_teachers', $dt_teacher)->with('dt_employees', $dt_employee)->with('dt_staffs', $dt_staff)->with('dt_parents', $dt_parent)->with('dt_students', $dt_student)->with('uname',$uname)->with('akses_edit', $akses_edit);
            
        }
        else{
            return redirect(url('login'));
        }
    }

    public function edit_profile()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $akses_edit = \App\akses::where('akses_email', session('akses_email'))->get();
        return \View::make('edit_profile')->with('akses_edit', $akses_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_account()
    {
        session_start();
        $akses_code     = Input::get("akses_code_".Input::get("type_code"));
        $akses_type     = $_POST['akses_type'];
        $akses_email    = Input::get("akses_email_".Input::get("type_email"));

        $akses_status = \DB::table('akses')->where([
                                        ['akses_code', 'like', $akses_code], 
                                        ['akses_email', 'like', $akses_email],
                                        ['akses_type', 'like', $akses_type]
                                    ])->count();
                        if (!empty($akses_status)) {
                            $_SESSION['error_msg'] = "You are wrong edit data account!";
                            return redirect('manage_account/all_account');
                        }
        else
        {
        $post = \App\akses::find(Input::get('id'));
        $post->akses_code = Input::get("akses_code_".Input::get("type_code"));
        $post->akses_type = Input::get('akses_type');
        // $post->akses_code = Input::get('akses_code');
        $post->akses_email = Input::get("akses_email_".Input::get("type_email"));
        $post->akses_status_data = Input::get('akses_status_data');
        $post->akses_username = Input::get('akses_username');
        $post->akses_password = Input::get('akses_password');
        $post->akses_create_by = session('akses_email');

        if(Input::hasFile('akses_imguser')){
            $akses_imguser = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('akses_imguser')->getClientOriginalExtension();
        
            Input::file('akses_imguser')->move(storage_path(),$akses_imguser);
            $post->akses_imguser = $akses_imguser;
        }

        $post->save();

        return redirect(url('manage_account/all_account'));
    }
       
    }

    public function update_profile()
    {
        
        $post = \App\akses::find(Input::get('id'));
        $post->akses_username = Input::get('akses_username');
        $post->akses_password = Input::get('akses_password');

        if(Input::hasFile('akses_imguser')){
            $akses_imguser = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('akses_imguser')->getClientOriginalExtension();
        
            Input::file('akses_imguser')->move(storage_path(),$akses_imguser);
            $post->akses_imguser = $akses_imguser;
        }

        $post->save();
        return redirect(url('manage_setting/edit_profile'));
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_parent = \App\dt_parent::all();
            $data_student = \App\dt_student::all();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_nisn_tk = \DB::table('dt_student')->where('dt_student_grade', 'like', 'tk')->get();
            $data_nisn_sd = \DB::table('dt_student')->where('dt_student_grade', 'like', 'sd')->get();
            $data_nisn_smp = \DB::table('dt_student')->where('dt_student_grade', 'like', 'smp')->get();
            $data_nisn_sma = \DB::table('dt_student')->where('dt_student_grade', 'like', 'sma')->get();
            return \View::make('master_parent')->with('data_parent', $data_parent)->with('data_kelas',$data_kelas)->with('data_nisn_tk',$data_nisn_tk)->with('data_nisn_sd',$data_nisn_sd)->with('data_nisn_smp',$data_nisn_smp)->with('data_nisn_sma',$data_nisn_sma)->with('data_student', $data_student)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_parent()
    {
        $post = new \App\dt_parent;
        $post->dt_parent_student_grade = Input::get('dt_parent_student_grade');
        $post->dt_parent_name = Input::get('dt_parent_fname')."|".Input::get('dt_parent_lname');
        $post->dt_parent_contact = Input::get('dt_parent_contact');
        $post->dt_parent_email = Input::get('dt_parent_email');
        $post->dt_parent_address = Input::get('dt_parent_address');
        $post->dt_parent_age = Input::get('dt_parent_age');
        $post->dt_parent_nisn = Input::get('dt_parent_nisn_'.Input::get("type_class"));
        $post->dt_parent_statuslog = Input::get('dt_parent_statuslog');
         if(Input::hasFile('dt_parent_name_img')){
            $dt_parent_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_parent_name_img')->getClientOriginalExtension();
        
            Input::file('dt_parent_name_img')->move(storage_path(),$dt_parent_name_img);
            $post->dt_parent_name_img = $dt_parent_name_img;
        }
        $post->save();

        return redirect(url('manage_parent/master_parent'));
    }

    public function save_mailnews()
    {
        $post = new \App\dt_mailnews;
        $post->dt_mailnews_email = Input::get('dt_mailnews_email');
        $post->dt_mailnews_status = 'disable';
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $post->dt_mailnews_create_by = session('akses_email');
        }else{
        $post->dt_mailnews_create_by = Input::get('dt_mailnews_email');
        }
        $post->save();

        return redirect()->back();
    }

    public function login_sadmin()
    {
        return view('login_sadmin');
    }

    public function edit_parent($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_parent = \App\dt_parent::all();
            $data_student = \App\dt_student::all();
            $data_edit = \App\dt_parent::find($id);
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_nisn_tk = \DB::table('dt_student')->where('dt_student_grade', 'like', 'tk')->get();
            $data_nisn_sd = \DB::table('dt_student')->where('dt_student_grade', 'like', 'sd')->get();
            $data_nisn_smp = \DB::table('dt_student')->where('dt_student_grade', 'like', 'smp')->get();
            $data_nisn_sma = \DB::table('dt_student')->where('dt_student_grade', 'like', 'sma')->get();
               
        return \View::make('edit_parent')->with('data_parent', $data_parent)->with('data_kelas',$data_kelas)->with('data_nisn_tk',$data_nisn_tk)->with('data_nisn_sd',$data_nisn_sd)->with('data_nisn_smp',$data_nisn_smp)->with('data_nisn_sma',$data_nisn_sma)->with('data_student', $data_student)->with('data_edit', $data_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_parent()
    {   
       session_start();
       if(session('akses_type') == "staff" || session('akses_type') == "root" || session('akses_type') == "root+"){
        $post = \App\dt_parent::find(Input::get('id'));
        $post->dt_parent_student_grade = Input::get('dt_parent_student_grade');
        $post->dt_parent_name = Input::get('dt_parent_fname')."|".Input::get('dt_parent_lname');
        $post->dt_parent_contact = Input::get('dt_parent_contact');
        $post->dt_parent_email = Input::get('dt_parent_email');
        $post->dt_parent_address = Input::get('dt_parent_address');
        $post->dt_parent_nisn = Input::get('dt_parent_nisn_'.Input::get("type_class"));
        $post->dt_parent_age = Input::get('dt_parent_age');
        $post->dt_parent_statuslog = Input::get('dt_parent_statuslog');
         if(Input::hasFile('dt_parent_name_img')){
            $dt_parent_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_parent_name_img')->getClientOriginalExtension();
        
            Input::file('dt_parent_name_img')->move(storage_path(),$dt_parent_name_img);
            $post->dt_parent_name_img = $dt_parent_name_img;
        }
        $post->save();

        return redirect(url('manage_parent/master_parent'));
        } else{
        $post = \App\dt_parent::find(Input::get('id'));
        $post->dt_parent_nisn = Input::get('dt_parent_nisn');
        $post->dt_parent_name = Input::get('dt_parent_fname')."|".Input::get('dt_parent_lname');
        $post->dt_parent_contact = Input::get('dt_parent_contact');
        $post->dt_parent_email = Input::get('dt_parent_email');
        $post->dt_parent_address = Input::get('dt_parent_address');
        $post->dt_parent_age = Input::get('dt_parent_age');
        $post->dt_parent_statuslog = Input::get('dt_parent_statuslog');
         if(Input::hasFile('dt_parent_name_img')){
            $dt_parent_name_img = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('dt_parent_name_img')->getClientOriginalExtension();
        
            Input::file('dt_parent_name_img')->move(storage_path(),$dt_parent_name_img);
            $post->dt_parent_name_img = $dt_parent_name_img;
        }
        $post->save();

        return redirect(url('manage_parent/my_data'));
        }
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

    public function master_type_post()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $m_blog = \App\m_blog::all();
        return \View::make('master_type_post')->with('m_blogs', $m_blog)->with('uname',$uname);
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $m_blog = \App\m_blog::find($id);
        $blog = \App\m_blog::all();
        return \View::make('edit_master_type_post')->with('m_blogs', $m_blog)->with('blog', $blog)->with('uname',$uname);
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $m_kelas = \App\m_kelas::all();
        return \View::make('master_class_post')->with('m_kelass', $m_kelas)->with('uname',$uname);
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $m_kelas = \App\m_kelas::find($id);
        $kelas = \App\m_kelas::all();
        return \View::make('edit_master_class_post')->with('m_kelass', $m_kelas)->with('kelas', $kelas)->with('uname',$uname);
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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $teacher_sch = \App\dt_sch::all();
            $absen_type = \App\m_absen::ALL();
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('teacher_sch')->with('teacher_sch',$teacher_sch)->with('absen_type',$absen_type)->with('dt_teachers',$dt_teacher)->with('uname',$uname);
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
        $post->sch_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_teacher/schedule_teacher'));
    }

    public function edit_teacher_sch($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $teachersch = \App\dt_sch::all();
            $teacher_sch = \App\dt_sch::find($id);
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('edit_teacher_sch')->with('teacher_sch',$teacher_sch)->with('teachersch',$teachersch)->with('dt_teachers',$dt_teacher)->with('uname',$uname);
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
        $post->sch_create_by = session('akses_email');
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

    public function save_student_activity()
    {
        $post = new \App\dt_aktivitas;
        $post->dt_aktivitas_grade = Input::get('dt_aktivitas_grade');
        $post->dt_aktivitas_class = Input::get('dt_aktivitas_class');
        $post->dt_aktivitas_name = Input::get('dt_aktivitas_name');
        $post->dt_aktivitas_nisn = Input::get('dt_aktivitas_nisn');
        $post->dt_aktivitas_date = Input::get('dt_aktivitas_date');
        $post->dt_aktivitas_reason = Input::get('dt_aktivitas_reason');
        $post->dt_aktivitas_permission = Input::get('dt_aktivitas_permission');
        $post->dt_aktivitas_createby = session('akses_email');
        $post->save();

        return redirect(url('manage_student/post_activity'));
    }

    public function edit_student_activity($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $student = \App\dt_aktivitas::find($id);
            if(session('akses_type') == "student"){
            $data_aktivitas = \App\dt_aktivitas::where('dt_aktivitas_createby', session('akses_email'))->get();
            }else{
                $data_aktivitas = \App\dt_aktivitas::all();
            }
            return \View::make('edit_post_activity')->with('data_aktivitas',$data_aktivitas)->with('student',$student)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_student_activity()
    {
        $post = \App\dt_aktivitas::find(Input::get('id'));
        $post->dt_aktivitas_grade = Input::get('dt_aktivitas_grade');
        $post->dt_aktivitas_class = Input::get('dt_aktivitas_class');
        $post->dt_aktivitas_name = Input::get('dt_aktivitas_name');
        $post->dt_aktivitas_nisn = Input::get('dt_aktivitas_nisn');
        $post->dt_aktivitas_date = Input::get('dt_aktivitas_date');
        $post->dt_aktivitas_reason = Input::get('dt_aktivitas_reason');
        $post->dt_aktivitas_permission = Input::get('dt_aktivitas_permission');
        $post->dt_aktivitas_createby = session('akses_email');
        $post->save();

        return redirect(url('manage_student/post_activity'));
    }

    public function delete_student_activity($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_aktivitas::find($id)->delete();
            return redirect(url('manage_student/post_activity'));        }
        else{
            return redirect(url('login'));
        }
    }
    
    public function master_feature()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $feature = \App\dt_feature::all();
            return \View::make('master_feature')->with('feature',$feature)->with('uname',$uname);
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
        $post->feature_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_feature/master_feature'));
    }

    public function edit_feature($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $feature = \App\dt_feature::all();
            $feature_edit = \App\dt_feature::find($id);
            return \View::make('edit_master_feature')->with('feature',$feature)->with('feature_edit',$feature_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_feature()
    {
        $post = \App\dt_feature::find(Input::get('id'));
        $post->feature_to = Input::get('feature_to');
        $post->feature_for = Input::get('feature_for');
        $post->feature_text = Input::get('feature_text');
        $post->feature_status = Input::get('feature_status');
        $post->feature_update_by = session('akses_email');
        $post->save();

        return redirect(url('manage_feature/master_feature'));
    }

    public function delete_feature($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_feature::find($id)->delete();
            return redirect(url('manage_feature/master_feature'));        
        }
        else{
            return redirect(url('login'));
        }
    }    

    public function master_class()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $class = \App\dt_kelas::all();
            return \View::make('master_class')->with('class',$class)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_class()
    {
        $post = new \App\dt_kelas;
        $post->dt_kelas_type = Input::get('dt_kelas_type');
        $post->dt_kelas_name = Input::get('dt_kelas_name');
        $post->dt_kelas_status = Input::get('dt_kelas_status');
        $post->dt_kelas_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_class/master_class'));
    }

    public function edit_class($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $class = \App\dt_kelas::all();
            $class_edit = \App\dt_kelas::find($id);
            return \View::make('edit_class')->with('class',$class)->with('class_edit',$class_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_class()
    {
        $post = \App\dt_kelas::find(Input::get('id'));
        $post->dt_kelas_type = Input::get('dt_kelas_type');
        $post->dt_kelas_name = Input::get('dt_kelas_name');
        $post->dt_kelas_status = Input::get('dt_kelas_status');
        $post->dt_kelas_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_class/master_class'));
    }

    public function delete_class($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_kelas::find($id)->delete();
            return redirect(url('manage_class/master_class'));        
        }
        else{
            return redirect(url('login'));
        }
    } 

    public function class_sch()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $class_sch = \App\sch_class::all();
            $c_sch = \App\sch_class::all();
            $dt_class = \App\dt_kelas::all();
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('class_sch')->with('class_sch',$class_sch)->with('c_sch',$c_sch)->with('dt_class',$dt_class)->with('dt_teachers',$dt_teacher)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    // public function detail_class_sch($id)
    // {
    //    session_start();
    //     if(isset($_SESSION['logged_in'])){

    //         $c_sch = \App\sch_class::find($id);
    //         return \View::make('class_sch')->with('c_sch',$c_sch);
    //     }
    //     else{
    //         return redirect(url('login'));
    //     }
    // }

    public function save_class_sch()
    {
        $post = new \App\sch_class;
        $post->sch_class_forclass = Input::get('sch_class_forclass');
        $post->sch_class_day = Input::get('sch_class_day');
        $post->sch_class_month = Input::get('sch_class_month');
        $post->sch_class_year = Input::get('sch_class_year');
        $post->sch_class_time = Input::get('sch_class_time');
        $post->sch_class_teacher = Input::get('sch_class_teacher');
        $post->sch_class_schedule = Input::get('sch_class_schedule');
        $post->sch_class_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_class/master_schedule_class'));
    }

    public function edit_class_sch($id)
    {
      session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $class_sch = \App\sch_class::all();
            $class_sch_edit = \App\sch_class::find($id);
            $dt_class = \App\dt_kelas::all();
            $dt_teacher = \App\dt_teacher::all();
            return \View::make('edit_class_sch')->with('class_sch',$class_sch)->with('dt_class',$dt_class)->with('dt_teachers',$dt_teacher)->with('class_sch_edit',$class_sch_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_class_sch()
    {
        $post = \App\sch_class::find(Input::get('id'));
        $post->sch_class_forclass = Input::get('sch_class_forclass');
        $post->sch_class_day = Input::get('sch_class_day');
        $post->sch_class_month = Input::get('sch_class_month');
        $post->sch_class_year = Input::get('sch_class_year');
        $post->sch_class_time = Input::get('sch_class_time');
        $post->sch_class_teacher = Input::get('sch_class_teacher');
        $post->sch_class_schedule = Input::get('sch_class_schedule');
        $post->sch_class_update_by = session('akses_email');
        $post->save();

        return redirect(url('manage_class/master_schedule_class'));
    }

    public function delete_class_sch($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\sch_class::find($id)->delete();
            return redirect(url('manage_class/master_schedule_class'));        
        }
        else{
            return redirect(url('login'));
        }
    }

    public function master_student()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_student = \App\dt_student::all();
            // $data_kelas = \App\dt_kelas::all();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_kelas_tk = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'tk')->get();
            $data_kelas_sd = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sd')->get();
            $data_kelas_smp = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'smp')->get();
            $data_kelas_sma = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sma')->get();
            return view('master_student')->with('data_student',$data_student)->with('data_kelas',$data_kelas)->with('data_kelas_tk',$data_kelas_tk)->with('data_kelas_sd',$data_kelas_sd)->with('data_kelas_smp',$data_kelas_smp)->with('data_kelas_sma',$data_kelas_sma)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function detail_student()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_student = \App\dt_student::all();
            return view('detail_student')->with('data_student',$data_student)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function detail_parent()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_parent = \App\dt_parent::all();
            return view('detail_parent')->with('data_parent',$data_parent)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }


    public function save_master_student()
    {
        $post = new \App\dt_student;
        $post->dt_student_nisn = Input::get('dt_student_nisn');
        $post->dt_student_name = Input::get('dt_student_fname')."|".Input::get('dt_student_lname');
        $post->dt_student_grade = Input::get('dt_student_grade');
        $post->dt_student_kelas = Input::get('dt_student_kelas_'.Input::get("type_class"));
        $post->dt_student_bplace = Input::get('dt_student_bplace');
        $post->dt_student_dobplace = Input::get('dt_student_dobplace');
        $post->dt_student_bloodtype = Input::get('dt_student_bloodtype');
        $post->dt_student_contact = Input::get('dt_student_contact');
        $post->dt_student_address = Input::get('dt_student_address');
        $post->dt_student_age = Input::get('dt_student_age');
        $post->dt_student_gender = Input::get('dt_student_gender');
        $post->dt_student_religion = Input::get('dt_student_religion');
        $post->dt_student_nameparent = Input::get('dt_student_nameparent');
        $post->dt_student_statuslog = Input::get('dt_student_statuslog');
        $post->dt_student_update_by = session('akses_email');
        $post->dt_student_email = Input::get('dt_student_email');

        $post->save();

        return redirect(url('manage_student/master_student'));
    }

    public function edit_master_student($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_student = \App\dt_student::all();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_kelas_tk = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'tk')->get();
            $data_kelas_sd = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sd')->get();
            $data_kelas_smp = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'smp')->get();
            $data_kelas_sma = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sma')->get();
            $data_edit = \App\dt_student::find($id);
            return view('edit_master_student')->with('data_student',$data_student)->with('data_edit',$data_edit)->with('data_kelas',$data_kelas)->with('data_kelas_tk',$data_kelas_tk)->with('data_kelas_sd',$data_kelas_sd)->with('data_kelas_smp',$data_kelas_smp)->with('data_kelas_sma',$data_kelas_sma)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function update_master_student()
    {
        session_start();
        if(session('akses_type') == "staff" || session('akses_type') == "root" || session('akses_type') == "root+") {
        $post = \App\dt_student::find(Input::get('id'));
        $post->dt_student_nisn = Input::get('dt_student_nisn');
        $post->dt_student_name = Input::get('dt_student_fname')."|".Input::get('dt_student_lname');
        $post->dt_student_grade = Input::get('dt_student_grade');
        $post->dt_student_kelas = Input::get('dt_student_kelas_'.Input::get("type_class"));
        $post->dt_student_bplace = Input::get('dt_student_bplace');
        $post->dt_student_dobplace = Input::get('dt_student_dobplace');
        $post->dt_student_bloodtype = Input::get('dt_student_bloodtype');
        $post->dt_student_contact = Input::get('dt_student_contact');
        $post->dt_student_address = Input::get('dt_student_address');
        $post->dt_student_age = Input::get('dt_student_age');
        $post->dt_student_gender = Input::get('dt_student_gender');
        $post->dt_student_religion = Input::get('dt_student_religion');
        $post->dt_student_nameparent = Input::get('dt_student_nameparent');
        $post->dt_student_statuslog = Input::get('dt_student_statuslog');
        $post->dt_student_update_by = session('akses_email');
        $post->dt_student_email = Input::get('dt_student_email');

        $post->save();

        return redirect(url('manage_student/master_student'));
        } else
        {
        $post = \App\dt_student::find(Input::get('id'));
        $post->dt_student_nisn = Input::get('dt_student_nisn');
        $post->dt_student_name = Input::get('dt_student_fname')."|".Input::get('dt_student_lname');
        $post->dt_student_grade = Input::get('dt_student_grade');
        $post->dt_student_kelas = Input::get('dt_student_kelas');
        $post->dt_student_bplace = Input::get('dt_student_bplace');
        $post->dt_student_dobplace = Input::get('dt_student_dobplace');
        $post->dt_student_bloodtype = Input::get('dt_student_bloodtype');
        $post->dt_student_contact = Input::get('dt_student_contact');
        $post->dt_student_address = Input::get('dt_student_address');
        $post->dt_student_age = Input::get('dt_student_age');
        $post->dt_student_gender = Input::get('dt_student_gender');
        $post->dt_student_religion = Input::get('dt_student_religion');
        $post->dt_student_nameparent = Input::get('dt_student_nameparent');
        $post->dt_student_statuslog = Input::get('dt_student_statuslog');
        $post->dt_student_update_by = session('akses_email');
        $post->dt_student_email = Input::get('dt_student_email');

        $post->save();
        return redirect(url('manage_student/my_data'));
        }
    }

    public function delete_master_student($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_student::find($id)->delete();
            return redirect( url('manage_student/master_student'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function detail_teacher($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $detail_teacher = \App\dt_teacher::find($id);
            echo json_encode($detail_teacher);
        }
        else{
            return redirect('login');
        }
    }

    public function master_absen()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_absen = \App\m_absen::all();
            return \View::make('master_absen')->with('data_absen',$data_absen)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_absen()
    {
        $post = new \App\m_absen;
        $post->m_absen_type = Input::get('m_absen_type');
        $post->m_absen_come = Input::get('m_absen_come');
        $post->m_absen_return = Input::get('m_absen_return');
        $post->m_absen_status = Input::get('m_absen_status');
        $post->m_absen_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_absen/master_absen'));
    }

    public function edit_absen($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $absen = \App\m_absen::all();
            $absen_edit = \App\m_absen::find($id);
            return \View::make('edit_absen')->with('absen',$absen)->with('absen_edit',$absen_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_absen()
    {
        $post = \App\m_absen::find(Input::get('id'));
        $post->m_absen_type = Input::get('m_absen_type');
        $post->m_absen_come = Input::get('m_absen_come');
        $post->m_absen_return = Input::get('m_absen_return');
        $post->m_absen_status = Input::get('m_absen_status');
        $post->m_absen_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_absen/master_absen'));
    }

    public function delete_absen($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\m_absen::find($id)->delete();
            return redirect(url('manage_absen/master_absen'));        
        }
        else{
            return redirect(url('login'));
        }
    } 

    public function master_teacher_recap()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_rekap = \App\dt_rekap::all();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();

        return view('master_recap')
            ->with('uname',$uname)
            ->with('data_rekap',$data_rekap)
            ->with('data_kelas',$data_kelas);
        }
        else{
            return redirect('login');
        }
    }
    public function getClassByGrade()
    {
        $grade = Input::get('grade');
        $kelas = \App\dt_kelas::where('dt_kelas_type',$grade)->get();
        echo json_encode($kelas);
    }

    public function getStudentByClass()
    {
        $class = Input::get('class');
        $student = \App\dt_student::where('dt_student_kelas',$class)->get();
        echo json_encode($student);
    }

        public function save_recap()
    {
        $post = new \App\dt_rekap;
        $post->dt_rekap_type = Input::get('dt_rekap_type');
        $post->dt_rekap_for = Input::get('dt_rekap_for');
        $post->dt_rekap_class = Input::get('dt_rekap_class');
        $post->dt_rekap_name_student = Input::get('dt_rekap_name_student');
        $post->dt_rekap_nilai = Input::get('dt_rekap_nilai');
        $post->dt_rekap_create_by = session('akses_email');
        $post->save();

        return redirect(url('manage_teacher/master_teacher_recap'));
    }

    public function edit_recap($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_rekap = \App\dt_rekap::all();
            $rekap_edit = \App\dt_rekap::find($id);
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();

        return view('edit_recap')
            ->with('uname',$uname)
            ->with('data_rekap',$data_rekap)
            ->with('data_kelas',$data_kelas)
            ->with('rekap_edit',$rekap_edit);
        }
        else{
            return redirect('login');
        }

    }

    public function update_recap()
    {
        $post = \App\dt_rekap::find(Input::get('id'));
        $post->dt_rekap_type = Input::get('dt_rekap_type');
        $post->dt_rekap_for = Input::get('dt_rekap_for');
        $post->dt_rekap_class = Input::get('dt_rekap_class');
        $post->dt_rekap_name_student = Input::get('dt_rekap_name_student');
        $post->dt_rekap_nilai = Input::get('dt_rekap_nilai');
        $post->dt_rekap_update_by = session('akses_email');
        $post->save();

        return redirect(url('manage_teacher/master_teacher_recap'));
    }

    public function delete_recap($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_rekap::find($id)->delete();
            return redirect(url('manage_teacher/master_teacher_recap'));        
        }
        else{
            return redirect(url('login'));
        }
    } 

    public function master_access_code()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $akses_log = \App\akses_log::all();
        return \View::make('master_access_code')->with('akses_logs', $akses_log)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }


    public function save_access_code()
    {
        $post = new \App\akses_log;
        $post->akses_log_code = Input::get('akses_log_code');
        $post->akses_log_type = Input::get('akses_log_type');
        $post->akses_log_datevalid = Input::get('akses_log_datevalid');
        $post->save();

        return redirect(url('manage_account/master_access_code'));
    }

    public function edit_access_code($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $akses_log_edit = \App\akses_log::find($id);
        $akses_log = \App\akses_log::all();
        return \View::make('edit_access_code')->with('akses_logs', $akses_log)->with('akses_log_edit', $akses_log_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_access_code()
    {
        $post = \App\akses_log::find(Input::get('id'));
        $post->akses_log_code = Input::get('akses_log_code');
        $post->akses_log_type = Input::get('akses_log_type');
        $post->akses_log_datevalid = Input::get('akses_log_datevalid');
        $post->save();

        return redirect(url('manage_account/master_access_code'));
    }

    public function delete_access_code($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\akses_log::find($id)->delete();
            return redirect( url('manage_account/master_access_code'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function all_absen()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $dt_absen = \App\dt_absen::all();
        return \View::make('all_absen')->with('dt_absens', $dt_absen)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }


    public function edit_all_absen($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $dt_absen_edit = \App\dt_absen::find($id);
        $dt_absen = \App\dt_absen::all();
        return \View::make('edit_absen')->with('dt_absens', $dt_absen)->with('dt_absen_edit', $dt_absen_edit)->with('uname',$uname);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function update_all_absen()
    {
        $post = \App\dt_absen::find(Input::get('id'));
        $post->dt_absen_code = Input::get('dt_absen_code');
        $post->dt_absen_datevalid = Input::get('dt_absen_datevalid');
        $post->save();

        return redirect(url('manage_absen/all_data_absen'));
    }

    public function delete_all_absen($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_absen::find($id)->delete();
            return redirect( url('manage_absen/all_data_absen'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function generateRandomString($length = 20) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function registration_student()
    {
        $code = $this->generateRandomString($length = 20);
        $post = new \App\dt_reg;
        $post->dt_reg_year = Input::get('dt_reg_year');
        $post->dt_reg_name_student = Input::get('dt_reg_name_student');
        $post->dt_reg_type = Input::get('dt_student_grade');
        $post->dt_reg_class= Input::get('dt_student_kelas_'.Input::get("type_class"));
        $post->dt_reg_gender = Input::get('dt_reg_gender');
        $post->dt_reg_place = Input::get('dt_reg_place');
        $post->dt_reg_dob = Input::get('dt_reg_dob');
        $post->dt_reg_religion = Input::get('dt_reg_religion');
        $post->dt_reg_before = Input::get('dt_reg_before');
        $post->dt_reg_address = Input::get('dt_reg_address');
        $post->dt_reg_namefather = Input::get('dt_reg_namefather');
        $post->dt_reg_namemother = Input::get('dt_reg_namemother');
        $post->dt_reg_contact = Input::get('dt_reg_contact');
        $post->dt_reg_emailparent = Input::get('dt_reg_emailparent');
        $post->dt_reg_create_by = Input::get('dt_reg_emailparent');
        $post->dt_reg_codereg = $code;
        $post->save();
        
        $post2 = new \App\dt_codereg;
        $post2->dt_codereg_code = $code;
        $post2->dt_codereg_type = Input::get('dt_student_grade');
        $post2->dt_codereg_status = "disable";


        $post2->save();

        return redirect()->back()->with('status', 'Registration Succes !');
    }

    public function cekabsen()
    {
        $cekabsen = \App\dt_absen::where('dt_absen_create_by',session('akses_email'))->whereRaw('date(dt_absen_time)="'.date("Y-m-d").'"')->first();
        
        if($cekabsen == null) {
            $stat = "kosong";
        }else{
            $stat = "ada";
        }
        $data[] = array(
             'stat' => $stat
         );

         return json_encode($data);
    }

    public function absen_page(Request $request)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_blog_admin = \App\dt_blog::orderBy('id', 'desc')->paginate(6);
            $dt_absen = \App\dt_absen::all();
            $maps = \DB::table('dt_maps')->get();
            $cek = $this->cekabsen();       
            return \View::make('absen_page')
                ->with('request',$request)  
                ->with('dt_absens',$dt_absen)           
                ->with('dt_blog_admins',$dt_blog_admin)         
                ->with('uname',$uname)              
                ->with('absen',$cek)            
                ->with('maps',$maps);
        }
        else{
            return redirect('login')->with('request',$request);
        }    
    }

}