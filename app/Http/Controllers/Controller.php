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
      return view('news');
    }

    public function agenda()
    {
      return view('agenda');
    }

    public function pengumuman()
    {
      return view('pengumuman');
    }

    public function artikel()
    {
      return view('artikel');
    }

    public function portal_tk()
    {
      return view('portal_tk');
    }

    public function portal_sd()
    {
      return view('portal_sd');
    }

    public function portal_smp()
    {
      return view('portal_smp');
    }

    public function portal_sma()
    {
      return view('portal_sma');
    }

    public function view()
    {
      return view('view');
    }

    public function test()
    {
      session_start();
        if(isset($_SESSION['logged_in'])){
            return view('test');
        }
        else{
            return redirect('login');
        }
    }

    public function pendaftaran()
    {
      return view('pendaftaran');
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


