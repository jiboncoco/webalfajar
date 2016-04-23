<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
      session_start();
        if(isset($_SESSION['logged_in'])){
            return redirect('admin');
        }
        else{
            return view('login');
        }
    }

    public function news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('news');
        }
        else{
            return view('news');
        }
    }

    public function agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('agenda');
        }
        else{
            return view('agenda');
        }
    }

    public function pengumuman()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('pengumuman');
        }
        else{
            return view('pengumuman');
        }
    }

    public function artikel()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('artikel');
        }
        else{
            return view('artikel');
        }
    }

    public function portal_tk()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('portal_tk');
        }
        else{
            return view('portal_tk');
        }
    }

    public function portal_sd()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('portal_sd');
        }
        else{
            return view('portal_sd');
        }
    }

    public function portal_smp()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('portal_smp');
        }
        else{
            return view('portal_smp');
        }
    }

    public function portal_sma()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('portal_sma');
        }
        else{
            return view('portal_sma');
        }
    }

    public function view()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('view');
        }
        else{
            return view('view');
        }
    }

    public function test()
    {
            return view('test');
    }

    public function pendaftaran()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            return view('pendaftaran');
        }
        else{
            return view('pendaftaran');
        }
    }

    public function pendaftarantk_pdf()
    {
        $view = \View::make('pendaftarantk_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function pendaftaransd_pdf()
    {
        $view = \View::make('pendaftaransd_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function pendaftaransmp_pdf()
    {
        $view = \View::make('pendaftaransmp_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function pendaftaransma_pdf()
    {
        $view = \View::make('pendaftaransma_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }


}


