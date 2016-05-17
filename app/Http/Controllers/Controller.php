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
            $dt_blog_all_news = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news)->with('announcement',$announcement)->with('article',$article);
            
        }
        else{
            $dt_blog_all_news = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news)->with('announcement',$announcement)->with('article',$article);
            
        }
    }

    public function agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda)->with('announcement',$announcement)->with('article',$article);
        }
        else{
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda)->with('announcement',$announcement)->with('article',$article);
        }
    }

    public function pengumuman()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman)->with('article', $article)->with('agenda', $agenda);
        }
        else{
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman)->with('article', $article)->with('agenda', $agenda);
        }
    }

    public function artikel()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel)->with('announcement', $announcement)->with('agenda', $agenda);
        }
        else{
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel)->with('announcement', $announcement)->with('agenda', $agenda);
        }
    }

    public function portal_tk()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article);
        }
    }

    public function portal_tk_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk);
        }
    }    


    public function portal_sd()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article);
        }
    }

        public function portal_sd_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
        else{
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd);
        }
    }  

    public function portal_smp()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_portal_smp = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp)->with('news',$news)->with('article',$article);
        }
        else{
            $dt_blog_portal_smp = \DB::table('dt_blog')->where('dt_blog_for', '=', 'smp')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp)->with('news',$news)->with('article',$article);
        }
    }

        public function portal_smp_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
        else{
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp);
        }
    }  

    public function portal_sma()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_portal_sma = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma)->with('news',$news)->with('article',$article);
        }
        else{
            $dt_blog_portal_sma = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma)->with('news',$news)->with('article',$article);
        }
    }

        public function portal_sma_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
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
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
        else{
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma);
        }
    }  

    public function view($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_blog_random=\App\dt_blog::all()->random(3);
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->take(2)->orderBy('dt_comment_id', 'desc')->get();
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('view')->with('dt_blog_random',$dt_blog_random)->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)->with('dt_comment_all',$dt_comment_all)->with('article',$article)->with('announcement',$announcement);
        }
        else{
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_blog_random=\App\dt_blog::all()->random(3);
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->take(2)->orderBy('dt_comment_id', 'desc')->get();
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            return \View::make('view')->with('dt_blog_random',$dt_blog_random)->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)->with('dt_comment_all',$dt_comment_all)->with('article',$article)->with('announcement',$announcement);
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


