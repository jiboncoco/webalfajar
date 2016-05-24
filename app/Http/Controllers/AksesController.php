<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AksesController extends Controller
{
    public function master_teacher()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_teacher = \App\dt_teacher::where('akses_username', session('akses_username'));
            return view('master_teacher')->with('data_teacher',$data_teacher);
        }
        else{
            return redirect('login');
        }
    }
}
