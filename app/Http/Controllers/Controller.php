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
    	return view('login');
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

}
