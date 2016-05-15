<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
      session_start();
        if(isset($_SESSION['logged_in'])){
            return redirect('manage');
        }
        else{
            return view('login');
        }
    }

    public function news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_news = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->get();
            // return $dt_blog_all_news;
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news);
            
        }
        else{
            $dt_blog_all_news = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->get();
            // return $dt_blog_all_news;
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news);
            
        }
    }

    public function agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->get();
            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda);
        }
        else{
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->get();
            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda);
        }
    }

    public function pengumuman()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->get();
            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman);
        }
        else{
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->get();
            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman);
        }
    }

    public function artikel()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->get();
            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel);
        }
        else{
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->get();
            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel);
        }
    }

    public function portal_tk()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }

    public function portal_tk_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }    

    public function portal_tk_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }    

    public function portal_tk_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }

    public function portal_tk_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }    
    
    public function portal_tk_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }    


    public function portal_sd()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_portal_sd = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->get();
            return \View::make('portal_sd')->with('dt_blog_portal_sd', $dt_blog_portal_sd);
        }
        else{
            $dt_blog_portal_sd = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->get();
            return \View::make('portal_sd')->with('dt_blog_portal_sd', $dt_blog_portal_sd);
        }
    }

        public function portal_sd_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }    

    public function portal_sd_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }    

    public function portal_sd_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }

    public function portal_sd_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }    
    
    public function portal_sd_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }  

    public function portal_smp()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_portal_smp = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->get();
            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp);
        }
        else{
            $dt_blog_portal_smp = \DB::table('dt_blog')->where('dt_blog_for', '=', 'smp')->get();
            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp);
        }
    }

        public function portal_smp_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }    

    public function portal_smp_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }    

    public function portal_smp_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }

    public function portal_smp_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }    
    
    public function portal_smp_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->get();
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }  

    public function portal_sma()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_portal_sma = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->get();
            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma);
        }
        else{
            $dt_blog_portal_sma = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->get();
            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma);
        }
    }

        public function portal_sma_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }    

    public function portal_sma_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }    

    public function portal_sma_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }

    public function portal_sma_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }    
    
    public function portal_sma_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->get();
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }  

    public function view($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->take(2)->get();
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->get();
            return \View::make('view')->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)->with('dt_comment_all',$dt_comment_all);
        }
        else{
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->take(2)->get();
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->get();
            return \View::make('view')->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)->with('dt_comment_all',$dt_comment_all);
        }
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

    public function registration_tk_pdf()
    {
        $view = \View::make('registration_tk_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function registration_sd_pdf()
    {
        $view = \View::make('registration_sd_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function registration_smp_pdf()
    {
        $view = \View::make('registration_smp_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }

    public function registration_sma_pdf()
    {
        $view = \View::make('registration_sma_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        return $pdf->stream();
    }


}


