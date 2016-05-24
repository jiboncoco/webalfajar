<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AksesController extends Controller
{
    public function teacher_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_teacher = \App\dt_teacher::where('dt_teacher_nip', session('akses_code'))->get();
            return \View::make('teacher_my_data')->with('request', $request)->with('data_teacher',$data_teacher);
        }
        else{
            return redirect('login');
        }
    }

    public function teacher_my_schedule(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $sch_teacher = \App\dt_sch::where('sch_code', '=', session('akses_code'))->get();
            return view('teacher_my_sch')->with('request', $request)->with('sch_teacher',$sch_teacher);
        }
        else{
            return redirect('login');
        }
    }

    public function student_my_data(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_student = \App\dt_student::where('dt_student_nisn', session('akses_code'))->get();
            return \View::make('student_my_data')->with('request', $request)->with('data_student',$data_student);
        }
        else{
            return redirect('login');
        }
    }

    public function student_my_schedule(Request $request)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $sch_student = \App\sch_class::where('sch_class_grade', '=', session('dt_student_grade'))->get();
            return view('student_my_sch')->with('request', $request)->with('sch_student',$sch_teacher);
        }
        else{
            return redirect('login');
        }
    }
}
