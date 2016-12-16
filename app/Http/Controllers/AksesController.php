<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class AksesController extends Controller
{
    public function teacher_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_teacher = \App\dt_teacher::where('dt_teacher_email', session('akses_email'))->get();
            return \View::make('teacher_my_data')->with('request', $request)->with('data_teacher',$data_teacher)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function teacher_my_schedule(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $sch_teacher = \App\dt_sch::where('sch_code', '=', session('akses_code'))->get();
            return view('teacher_my_sch')->with('request', $request)->with('sch_teacher',$sch_teacher)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function student_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_student = \App\dt_student::where('dt_student_email', session('akses_email'))->get();
            return \View::make('student_my_data')->with('request', $request)->with('data_student',$data_student)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function student_post_activity(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_student = \App\dt_student::where('dt_student_email', session('akses_email'))->get();
            if(session('akses_type') == "student"){
            $data_aktivitas = \App\dt_aktivitas::where('dt_aktivitas_nisn', session('akses_code'))->get();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
        }else if(session('akses_type') == "parent"){
            $data_aktivitas = \App\dt_aktivitas::where('dt_aktivitas_nisn', session('akses_code'))->get();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
        }else{
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_aktivitas = \App\dt_aktivitas::all();
        }

            return \View::make('post_activity')->with('request', $request)->with('data_student',$data_student)->with('data_aktivitas',$data_aktivitas)->with('uname',$uname)->with('data_kelas', $data_kelas);
        }
        else{
            return redirect('login');
        }
    }

    public function student_schedule_class(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $sch_student = \App\sch_class::where('sch_class_forclass', 'like', session('dt_student_grade') )->get();
            return view('student_schedule_class')->with('request', $request)->with('sch_student', $sch_student)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function parent_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_parent = \App\dt_parent::where('dt_parent_email', session('akses_email'))->get();
            return \View::make('parent_my_data')->with('request', $request)->with('data_parent',$data_parent)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function message_staff()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('message_staff')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function message_student()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('message_student')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function message_teacher()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('message_teacher')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function message_parent()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('message_parent')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function compose_message_teacher()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            return \View::make('compose_message_teacher')->with('from',$from)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function compose_message_staff()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            return \View::make('compose_message_staff')->with('from',$from)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function compose_message_student()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            return \View::make('compose_message_student')->with('from',$from)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function compose_message_parent()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            return \View::make('compose_message_parent')->with('from',$from)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function sent_message_teacher()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('sent_message_teacher')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function sent_message_parent()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('sent_message_parent')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function sent_message_staff()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('sent_message_staff')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function sent_message_student()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('sent_message_student')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function teacher_read_message_sent($id)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::find($id);
            return \View::make('sent_read_message_teacher')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function student_read_message_sent($id)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::find($id);
            return \View::make('sent_read_message_student')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function staff_read_message_sent($id)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::find($id);
            return \View::make('sent_read_message_staff')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function parent_read_message_sent($id)
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::find($id);
            return \View::make('sent_read_message_parent')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function save_message_staff()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $post = new \App\dt_mail;
        $post->dt_mail_to = Input::get('dt_mail_to');
        $post->dt_mail_from = Input::get('dt_mail_from');
        $post->dt_mail_replyfrom = Input::get('dt_mail_to');
        $post->dt_mail_create_by = session('akses_email');
        $post->dt_mail_subject = Input::get('dt_mail_subject');
        $post->dt_mail_text = Input::get('dt_mail_text');
        
        $post->save();

        return redirect(url('manage_message/message_staff'))->with('status', 'Message Success Sent !');
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_message_teacher()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $post = new \App\dt_mail;
        $post->dt_mail_to = Input::get('dt_mail_to');
        $post->dt_mail_from = Input::get('dt_mail_from');
        $post->dt_mail_replyfrom = Input::get('dt_mail_to');
        $post->dt_mail_create_by = session('akses_email');
        $post->dt_mail_subject = Input::get('dt_mail_subject');
        $post->dt_mail_text = Input::get('dt_mail_text');
        
        $post->save();

        return redirect(url('manage_message/message_teacher'))->with('status', 'Message Success Sent !');
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_message_student()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $post = new \App\dt_mail;
        $post->dt_mail_to = Input::get('dt_mail_to');
        $post->dt_mail_from = Input::get('dt_mail_from');
        $post->dt_mail_replyfrom = Input::get('dt_mail_to');
        $post->dt_mail_create_by = session('akses_email');
        $post->dt_mail_subject = Input::get('dt_mail_subject');
        $post->dt_mail_text = Input::get('dt_mail_text');
        
        $post->save();

        return redirect(url('manage_message/message_student'))->with('status', 'Message Success Sent !');
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_message_parent()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $post = new \App\dt_mail;
        $post->dt_mail_to = Input::get('dt_mail_to');
        $post->dt_mail_from = Input::get('dt_mail_from');
        $post->dt_mail_replyfrom = Input::get('dt_mail_to');
        $post->dt_mail_create_by = session('akses_email');
        $post->dt_mail_subject = Input::get('dt_mail_subject');
        $post->dt_mail_text = Input::get('dt_mail_text');
        
        $post->save();

        return redirect(url('manage_message/message_parent'))->with('status', 'Message Success Sent !');
        }
        else{
            return redirect(url('login'));
        }
    }

    public function delete_message_staff($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_mail::find($id)->delete();
            return redirect( url('manage'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function delete_message_student($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_mail::find($id)->delete();
            return redirect( url('manage_message/message_student'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function delete_message_teacher($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_mail::find($id)->delete();
            return redirect( url('manage_message/message_teacher'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function delete_message_parent($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_mail::find($id)->delete();
            return redirect( url('manage_message/message_parent'));
        }
        else{
            return redirect(url('login'));
        }
    }

    public function mail_to_page()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('mail_to_page')->with('dt_mails',$dt_mail)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }

    public function compose_mail_to()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            return \View::make('compose_mail_to')->with('from',$from)->with('uname',$uname);
        }
        else{
            return redirect('login');
        }
    }


    public function sendEmail()
        {
            $post = new \App\dt_mail;
            $post->dt_mail_to = Input::get('dt_mail_to');
            $post->dt_mail_from = Input::get('dt_mail_from');
            $post->dt_mail_replyfrom = Input::get('dt_mail_to');
            $post->dt_mail_create_by = session('akses_email');
            $post->dt_mail_subject = Input::get('dt_mail_subject');
            $post->dt_mail_text = Input::get('dt_mail_text');


            $data = array(
                        'content' => Input::get('dt_mail_text'),
                        'by' => Input::get('dt_mail_from'),
                    );

                    \Mail::send('mail_to', $data, function ($message) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to(Input::get('dt_mail_to'))->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });

            return redirect(url('manage_message/compose_mail_to'))->with('status', 'Email Success Sent !');

    }


    public function email_blast_page()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
            $data_student = \App\dt_student::all();
            // $data_kelas = \App\dt_kelas::all();
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $from = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_kelas_tk = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'tk')->get();
            $data_kelas_sd = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sd')->get();
            $data_kelas_smp = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'smp')->get();
            $data_kelas_sma = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sma')->get();
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->orderBy('id', 'desc')->paginate(10);
            return \View::make('email_blast')->with('from',$from)->with('dt_mails',$dt_mail)->with('uname',$uname)->with('data_student',$data_student)->with('data_kelas',$data_kelas)->with('data_kelas_tk',$data_kelas_tk)->with('data_kelas_sd',$data_kelas_sd)->with('data_kelas_smp',$data_kelas_smp)->with('data_kelas_sma',$data_kelas_sma);
        }
        else{
            return redirect('login');
        }
    }

    public function emailBlast()
    {

        $teacher = \App\dt_teacher::where('dt_teacher_for', Input::get('dt_student_grade'))->get()->toArray();
        $parent = \App\dt_parent::where('dt_parent_student_grade', Input::get('dt_student_grade'))->get()->toArray();
        $student = \App\dt_student::where('dt_student_kelas', Input::get('dt_student_kelas_'.Input::get("type_class")))->get()->toArray();
        $employee = \App\dt_teacher::where('dt_teacher_type', 'Employee');
        $employ = array_column($employee, 'dt_teacher_email');
        $mail_news = \App\dt_mailnews::all();
        $mailnews = array_column($mail_news, 'dt_mailnews_email');
        $user_teacher = array_column($teacher, 'dt_teacher_email');
        $user_parent = array_column($parent, 'dt_parent_email');
        $user_student = array_column($student, 'dt_student_email');
        $user_send = array_merge($user_teacher, $user_student, $user_parent);


        $data = array(
                        'content' => Input::get('dt_mail_text'),
                        'by' => Input::get('dt_mail_from'),
                    );

        if(Input::get('mail_type') == "teacher") {
        \Mail::send('mail_to', $data, function ($message) use ($user_teacher) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($user_teacher)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });

        }else if(Input::get('mail_type') == "parent"){
        \Mail::send('mail_to', $data, function ($message) use ($user_parent) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($user_parent)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });
        }else if(Input::get('mail_type') == "student"){
        \Mail::send('mail_to', $data, function ($message) use ($user_student) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($user_student)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });
        }elseif(Input::get('mail_type') == "all"){
        \Mail::send('mail_to', $data, function ($message) use ($user_send) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($user_send)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });
        }elseif(Input::get('mail_type') == "mailnews"){
        \Mail::send('mail_to', $data, function ($message) use ($mailnews) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($mailnews)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });
       
        }elseif(Input::get('mail_type') == "employee"){
        \Mail::send('mail_to', $data, function ($message) use ($employ) {

                        $message->from('alfajarbekasi@gmail.com');

                        $message->to($mailnews)->subject(Input::get('dt_mail_subject'), Input::get('dt_mail_from'));

                    });
        }
        return redirect(url('manage_message/email_blast'))->with('status', 'Email Success Sent !');
        // echo Input::get('mail_type');
    }

    // public function absen_p()
    // {
    //     $check = \App\dt_absen::where()
    // }

    public function save_absen_p()
    {
        session_start();
        // if(session('akses_type') == "student"){
        //     $s = \App\dt_student::where('dt_student_email', session('akses_email'))->first();
        //     $name = $s->dt_student_name;
        // } else if(session('akses_type') == "teacher") {
            // $s = \App\dt_teacher::where('dt_teacher_email', session('akses_email'))->first();
            // $name = $s->dt_teacher_name;
        // }
        
        date_default_timezone_set("Asia/Jakarta");
        $post = new \App\dt_absen;
        $s = \App\dt_teacher::where('dt_teacher_email', session('akses_email'))->first();
        $name = $s->dt_teacher_name;
        $post->dt_absen_name = $name;
        $post->dt_absen_type = session('akses_type');
        $post->dt_absen_code = session('akses_code');
        $post->dt_absen_ket = "sudah";
        $post->dt_absen_time = date("Y-m-d H:i:s");
        $post->dt_absen_create_by = session('akses_email');
        $post->save();

        return redirect()->back()->with('status', 'Absen Success !');
    }

    public function save_absen_manual()
    {
        $post = new \App\dt_absen;
        $post->dt_absen_name = Input::get('dt_absen_name');
        $post->dt_absen_type = Input::get('dt_absen_type');
        $post->dt_absen_code = Input::get('dt_absen_code');
        $post->dt_absen_ket = "sudah";
        $post->dt_absen_time = Input::get('dt_absen_time');
        $post->dt_absen_create_by = session('akses_email');
        $post->save();

        return redirect()->back();
    }

    public function search_print()
    {
        session_start();
        $dt_codereg_code     = $_POST['dt_codereg_code'];
        $dt_codereg_type = $_POST['dt_codereg_type'];

        $check_data = \DB::table('dt_codereg')->where([
                                        ['dt_codereg_code', 'like', $dt_codereg_code], 
                                        ['dt_codereg_type', 'like', $dt_codereg_type]
                                    ])->count();

                                    if (!empty($check_data)) {

                                        $check_stat = \DB::table('dt_codereg')->where([
                                                                        ['dt_codereg_code', 'like', $dt_codereg_code], 
                                                                        ['dt_codereg_type', 'like', $dt_codereg_type],
                                                                        ['dt_codereg_status', 'like', 'active']
                                                                        ])->count();
                                        if (!empty($check_stat)) {
                                            $get_data = \DB::table('dt_reg')->where([
                                                ['dt_reg_code', 'like', $dt_codereg_code],
                                                ['dt_reg_unit', 'like', $dt_codereg_type]
                                            ])->get();

                                                // $pdf = new \DOMPDF();
                                                // $pdf->set_paper('A3','potrait'); //Changed A4 to A3
                                                // $view = \View::make('registration_sd_pdf')->with('get_data',$get_data);
                                                // $pdf->load_html($view);
                                                // $pdf->render();
                                                // $options = new Options();
                                                // $options->set('isRemoteEnabled', TRUE);
                                                // $pdf = new \Dompdf($options);

                                                $view = \View::make('registration_sd_pdf')->with('get_data',$get_data);;
                                                $pdf = \App::make('dompdf.wrapper');
                                                $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
                                                
                                                // $dompdf = new \DOMPDF;
                                                // $dompdf->set_option( 'isRemoteEnabled', true );
                                                // $html = \View::make('registration_sd_pdf')->with('get_data',$get_data);
                                                // $dompdf->load_html($html);
                                                // $dompdf->setPaper('A4', 'portrait');
                                                // $dompdf->render();
                                                // $pdf = $dompdf->output();
                                                // $dompdf->stream('Print');
                                                ini_set('max_execution_time', 500);
                                                return $pdf->stream();
                                            
                                        } else {
                                            $_SESSION['error_msg'] = "Your Code Disable ! Please Payment or Call Admin Alfajar";
                                            return redirect('registration');
                                        }

                                            
                                    } else {
                                        $_SESSION['error_msg'] = "Your Code or Type Grade Doesn't Exist ! Please Register First";
                                        return redirect('registration');
                                    }
                                            
    }

public function search_codereg()
    {
        session_start();
        $dt_reg_nama     = $_POST['dt_reg_nama'];
        $dt_reg_ibu_nama     = $_POST['dt_reg_ibu_nama'];
        $dt_reg_unit = $_POST['dt_reg_unit'];

        $check_data = \DB::table('dt_reg')->where([
                                        ['dt_reg_nama', 'like', $dt_reg_nama],
                                         ['dt_reg_ibu_nama', 'like', $dt_reg_ibu_nama],
                                        ['dt_reg_unit', 'like', $dt_reg_unit]
                                    ])->count();

                                    if (!empty($check_data)) {
                                    $check_data = \DB::table('dt_reg')->where([
                                        ['dt_reg_nama', 'like', $dt_reg_nama],
                                        ['dt_reg_ibu_nama', 'like', $dt_reg_ibu_nama], 
                                        ['dt_reg_unit', 'like', $dt_reg_unit]
                                    ])->get();
                                            foreach ($check_data as $check_data) {
                                            $_SESSION['error_msg'] = "Code Registration of $check_data->dt_reg_nama grade $check_data->dt_reg_unit is $check_data->dt_reg_code";
                                        }
                                            return redirect('registration')->with('check_data',$check_data);
                                            
                                        } else {
                                            $_SESSION['error_msg'] = "There's no code registration of $dt_reg_nama";
                                            return redirect('registration');
                                    }
                                            
    }

}