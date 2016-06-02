<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class AksesController extends Controller
{
    public function teacher_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $data_teacher = \App\dt_teacher::where('dt_teacher_nip', session('akses_code'))->get();
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
            $data_student = \App\dt_student::where('dt_student_nisn', session('akses_code'))->get();
            return \View::make('student_my_data')->with('request', $request)->with('data_student',$data_student)->with('uname',$uname);
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
            $data_parent = \App\dt_parent::where('dt_parent_nisn', session('akses_code'))->get();
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
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->paginate(10);
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
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->paginate(10);
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
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->paginate(10);
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
            $dt_mail = \App\dt_mail::where('dt_mail_to', session('akses_email'))->paginate(10);
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
            $from = \App\akses::where('from_create_by', session('akses_email'))->paginate(10);
            return \View::make('sent_message_teacher')->with('from',$from)->with('uname',$uname);
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
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->paginate(10);
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
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->paginate(10);
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
            $dt_mail = \App\dt_mail::where('dt_mail_create_by', session('akses_email'))->paginate(10);
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

        return redirect(url('manage_message/message_staff'));
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

        return redirect(url('manage_message/message_teacher'));
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

        return redirect(url('manage_message/message_student'));
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

        return redirect(url('manage_message/message_parent'));
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
            return redirect( url('manage_post/my_post'));
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
            return redirect( url('manage_post/my_post'));
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
            return redirect( url('manage_post/my_post'));
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
            return redirect( url('manage_post/my_post'));
        }
        else{
            return redirect(url('login'));
        }
    }

}
