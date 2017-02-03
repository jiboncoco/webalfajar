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

    public function home(){
        session_start();
        if(isset($_SESSION['logged_in'])){
            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();

            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get();            



            $dt_blog = \DB::table('dt_blog')->where([
                ['dt_blog_type', '=', 'news'],
                ])
                ->orderBy('id', 'desc')
                ->limit(3)
                ->get();
            $dt_blog_all = \App\dt_blog::orderBy('id', 'desc')->paginate(5);
            return \View::make('welcome')->with('dt_blogs',$dt_blog)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
        else{
            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();

            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get();            

            $dt_blog = \DB::table('dt_blog')->where([
                ['dt_blog_type', '=', 'news'],
                ])
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            $dt_blog_all = \App\dt_blog::orderBy('id', 'desc')->paginate(5);
            return \View::make('welcome')->with('dt_blogs',$dt_blog)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
    }

    public function login()
    {
      session_start();
        if(isset($_SESSION['logged_in'])){
            return redirect('manage_post/my_post');
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
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();

            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news)->with('announcement',$announcement)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
            
        }
        else{
                        $dt_blog_all_news = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'news')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();

            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 
            return \View::make('news')->with('dt_blog_all_news', $dt_blog_all_news)->with('announcement',$announcement)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
            
        }
    }

    public function agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda)->with('announcement',$announcement)
            ->with('article',$article)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
        else{
            $dt_blog_all_agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('agenda')->with('dt_blog_all_agenda', $dt_blog_all_agenda)->with('announcement',$announcement)
            ->with('article',$article)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
    }

    public function pengumuman()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman)->with('article', $article)
            ->with('agenda', $agenda)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
        else{
            $dt_blog_all_pengumuman = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(6);
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'announcement')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('pengumuman')->with('dt_blog_all_pengumuman', $dt_blog_all_pengumuman)->with('article', $article)
            ->with('agenda', $agenda)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
    }

    public function artikel()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel)->with('announcement', $announcement)
            ->with('agenda', $agenda)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
        else{
            $dt_blog_all_artikel = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(6);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->take(3)->orderBy('id', 'desc')->get();
            $agenda = \DB::table('dt_blog')->where('dt_blog_type', '=', 'agenda')->take(3)->orderBy('id', 'desc')->get();
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(5);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('artikel')->with('dt_blog_all_artikel', $dt_blog_all_artikel)->with('announcement', $announcement)
            ->with('agenda', $agenda)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('dt_blog_all',$dt_blog_all);
        }
    }

    public function portal_tk()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);
        }
        else{
            $dt_blog_all_portal_tk  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);   
        }
    }

    public function portal_tk_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(6);
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_tk_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);  
        }
    }    

    public function portal_tk_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

    public function portal_tk_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    }
    }    
    
    public function portal_tk_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'TK')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_tk = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'TK']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'TK')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_tk')->with('dt_blog_all_portal_tk', $dt_blog_all_portal_tk)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    }
    }    


    public function portal_sd()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

        public function portal_sd_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sd')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_sd_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_sd_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

    public function portal_sd_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    
    
    public function portal_sd_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SD')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sd = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sd']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SD']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SD')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sd')->with('dt_blog_all_portal_sd', $dt_blog_all_portal_sd)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }  

    public function portal_smp()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_portal_smp  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            
            $dt_blog_portal_smp  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_portal_smp', $dt_blog_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

        public function portal_smp_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'smp')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_smp_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_smp_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

    public function portal_smp_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    
    
    public function portal_smp_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMP')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_smp = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'smp']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMP']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMP')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_smp')->with('dt_blog_all_portal_smp', $dt_blog_all_portal_smp)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }  

    public function portal_sma()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_portal_sma  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_portal_sma  = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orwhere('dt_blog_for', '=', 'ALL')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_portal_sma', $dt_blog_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

        public function portal_sma_all()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where('dt_blog_type', '=', 'all', 'AND', 'dt_blog_for', '=', 'sma')->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_sma_news()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    

    public function portal_sma_agenda()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'agenda'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }

    public function portal_sma_announcement()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'announcement'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }    
    
    public function portal_sma_article()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
        else{
            $dt_blog_all = \DB::table('dt_blog')->where('dt_blog_for', '=', 'SMA')->orderBy('id', 'desc')->paginate(5);
            $dt_blog_all_portal_sma = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'sma']
                                                                    ])->orderBy('id', 'desc')->paginate(6);
            $news = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'news'],
                                                                    ['dt_blog_for', '=', 'ALL'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();
            $article = \DB::table('dt_blog')->where([
                                                                    ['dt_blog_type', '=', 'article'],
                                                                    ['dt_blog_for', '=', 'SMA']
                                                                    ])->orderBy('id', 'desc')->get();

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

                        $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();
            $tk_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $tk_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'partnerships'] ])->get();
            $tk_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'achievement'] ])->get();
            $tk_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'committee'] ])->get();
            $tk_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'alumni'] ])->get();
            $tk_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'student'] ])->get();
            $tk_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'headmaster'] ])->get();
            $tk_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'profile'] ])->get();
            $tk_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'education'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();
            $sd_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sd_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'partnerships'] ])->get();
            $sd_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'achievement'] ])->get();
            $sd_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'committee'] ])->get();
            $sd_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'alumni'] ])->get();
            $sd_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'student'] ])->get();
            $sd_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'headmaster'] ])->get();
            $sd_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'profile'] ])->get();
            $sd_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'education'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();
            $smp_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $smp_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'partnerships'] ])->get();
            $smp_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'achievement'] ])->get();
            $smp_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'committee'] ])->get();
            $smp_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'alumni'] ])->get();
            $smp_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'student'] ])->get();
            $smp_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'headmaster'] ])->get();
            $smp_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'profile'] ])->get();
            $smp_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'education'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();
            $sma_extra = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'ekstracurricular'] ])->get();
            $sma_partners = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'partnerships'] ])->get();
            $sma_achiev = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'achievement'] ])->get();
            $sma_commit = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'committee'] ])->get();
            $sma_alumni = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'alumni'] ])->get();
            $sma_student = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'student'] ])->get();
            $sma_headmas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'headmaster'] ])->get();
            $sma_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'profile'] ])->get();
            $sma_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'education'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('portal_sma')->with('dt_blog_all_portal_sma', $dt_blog_all_portal_sma)->with('news',$news)->with('article',$article)
            ->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('tk_extra',$tk_extra)->with('tk_partners',$tk_partners)
            ->with('tk_achiev',$tk_achiev)->with('tk_commit',$tk_commit)->with('tk_alumni',$tk_alumni)->with('tk_student',$tk_student)
            ->with('tk_headmas',$tk_headmas)->with('tk_profile',$tk_profile)->with('tk_edu',$tk_edu)->with('sd_extra',$sd_extra)->with('sd_partners',$sd_partners)
            ->with('sd_achiev',$sd_achiev)->with('sd_commit',$sd_commit)->with('sd_alumni',$sd_alumni)->with('sd_student',$sd_student)
            ->with('sd_headmas',$sd_headmas)->with('sd_profile',$sd_profile)->with('sd_edu',$sd_edu)->with('smp_extra',$smp_extra)->with('smp_partners',$smp_partners)
            ->with('smp_achiev',$smp_achiev)->with('smp_commit',$smp_commit)->with('smp_alumni',$smp_alumni)->with('smp_student',$smp_student)
            ->with('smp_headmas',$smp_headmas)->with('smp_profile',$smp_profile)->with('smp_edu',$smp_edu)->with('sma_extra',$sma_extra)->with('sma_partners',$sma_partners)
            ->with('sma_achiev',$sma_achiev)->with('sma_commit',$sma_commit)->with('sma_alumni',$sma_alumni)->with('sma_student',$sma_student)
            ->with('sma_headmas',$sma_headmas)->with('sma_profile',$sma_profile)->with('sma_edu',$sma_edu)->with('dt_blog_all',$dt_blog_all);    
        }
    }  

    public function view($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_blog_random=\App\dt_blog::all();
            if (sizeof($dt_blog_random) > 4)
            {
                $dt_blog_random=\App\dt_blog::paginate(3);
            }
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->paginate(2);
            $user_comment = \DB::table('akses')->join('dt_comment', 'akses.akses_email', '=', 'dt_comment.dt_comment_create_by')->select('akses.akses_username as uname_com', 'akses.akses_imguser as img_com')
            ->orderBy('dt_comment_id', 'desc')->paginate(2);
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(3);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->orderBy('id', 'desc')->paginate(3);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('view')->with('dt_blog_random',$dt_blog_random)->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)
            ->with('dt_comment_all',$dt_comment_all)->with('article',$article)->with('announcement',$announcement)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('user_comment',$user_comment)->with('uname',$uname) ;
        }
        else{
            $dt_blog = array('data'=>\App\dt_blog::find($id));
            $dt_blog_random=\App\dt_blog::all();
            if (sizeof($dt_blog_random) > 4)
            {
                $dt_blog_random=\App\dt_blog::paginate(3);
            }
            $dt_comment = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->paginate(2);
            $user_comment = \DB::table('akses')->join('dt_comment', 'akses.akses_email', '=', 'dt_comment.dt_comment_create_by')->select('akses.akses_username as uname_com', 'akses.akses_imguser as img_com')
            ->orderBy('dt_comment_id', 'desc')->paginate(2);
            $dt_comment_all = \DB::table('dt_comment')->where('dt_comment_blog_id', '=', $id)->orderBy('dt_comment_id', 'desc')->get();
            $article = \DB::table('dt_blog')->where('dt_blog_type', '=', 'article')->orderBy('id', 'desc')->paginate(3);
            $announcement = \DB::table('dt_blog')->where('dt_blog_type','=','announcement')->orderBy('id', 'desc')->paginate(3);

            $yayasan_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'visi-misi'] ])->get();
            $yayasan_edu = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'pendidikan'] ])->get();
            $yayasan_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'galery'] ])->get();
            $yayasan_profile = \DB::table('dt_feature')->where([ ['feature_to', '=', 'YAYASAN'],['feature_for', '=', 'profile'] ])->get();

            $tk_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'visi-misi'] ])->get();
            $tk_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'kurikulum'] ])->get();
            $tk_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'galery'] ])->get();
            $tk_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'tk'],['feature_for', '=', 'fasilitas'] ])->get();

            $sd_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'visi-misi'] ])->get();
            $sd_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'kurikulum'] ])->get();
            $sd_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'galery'] ])->get();
            $sd_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sd'],['feature_for', '=', 'fasilitas'] ])->get();

            $smp_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'visi-misi'] ])->get();
            $smp_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'kurikulum'] ])->get();
            $smp_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'galery'] ])->get();
            $smp_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'smp'],['feature_for', '=', 'fasilitas'] ])->get();

            $sma_vimi = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'visi-misi'] ])->get();
            $sma_kurkul = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'kurikulum'] ])->get();
            $sma_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'galery'] ])->get();
            $sma_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'sma'],['feature_for', '=', 'fasilitas'] ])->get();

            $dkm_galery = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'galery'] ])->get();
            $teacher = \App\dt_teacher::where('dt_teacher_for', 'SMA')->get();
            $dkm_fasilitas = \DB::table('dt_feature')->where([ ['feature_to', '=', 'dkm'],['feature_for', '=', 'fasilitas'] ])->get(); 

            return \View::make('view')->with('dt_blog_random',$dt_blog_random)->with('dt_blogs',$dt_blog)->with('dt_comments',$dt_comment)
            ->with('dt_comment_all',$dt_comment_all)->with('article',$article)->with('announcement',$announcement)->with('yayasan_vimi',$yayasan_vimi)->with('yayasan_edu',$yayasan_edu)
            ->with('yayasan_profile',$yayasan_profile)->with('yayasan_galery')->with('yayasan_galery',$yayasan_galery)->with('tk_vimi',$tk_vimi)
            ->with('tk_kurkul',$tk_kurkul)->with('tk_galery',$tk_galery)->with('tk_fasilitas',$tk_fasilitas)->with('sd_vimi',$sd_vimi)
            ->with('sd_kurkul',$sd_kurkul)->with('sd_galery',$sd_galery)->with('sd_fasilitas',$sd_fasilitas)->with('smp_vimi',$smp_vimi)
            ->with('smp_kurkul',$smp_kurkul)->with('smp_galery',$smp_galery)->with('smp_fasilitas',$smp_fasilitas)->with('sma_vimi',$sma_vimi)
            ->with('sma_kurkul',$sma_kurkul)->with('sma_galery',$sma_galery)->with('sma_fasilitas',$sma_fasilitas)->with('dkm_galery',$dkm_galery)
            ->with('dkm_fasilitas',$dkm_fasilitas)->with('teacher',$teacher)->with('user_comment',$user_comment);
        }
    }

    public function pendaftaran()
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_kelas_tk = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'tk')->get();
            $rules_register = \DB::table('dt_feature')->where([ ['feature_to', '=', 'OTHER'],['feature_for', '=', 'pendaftaran'] ])->get();
            $data_kelas_sd = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sd')->get();
            $data_kelas_smp = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'smp')->get();
            $data_kelas_sma = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sma')->get();
            return view('pendaftaran')->with('data_kelas',$data_kelas)->with('data_kelas_tk',$data_kelas_tk)->with('data_kelas_sd',$data_kelas_sd)
            ->with('data_kelas_smp',$data_kelas_smp)->with('data_kelas_sma',$data_kelas_sma)->with('rules_register',$rules_register);
        }
        else{
            $data_kelas = \DB::table('dt_kelas')
                     ->select(\DB::raw('count(*) as class, dt_kelas_type'))
                     ->where('dt_kelas_type', '<>', 1)
                     ->groupBy('dt_kelas_type')
                     ->get();
            $data_kelas_tk = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'tk')->get();
            $rules_register = \DB::table('dt_feature')->where([ ['feature_to', '=', 'OTHER'],['feature_for', '=', 'pendaftaran'] ])->get();
            $data_kelas_sd = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sd')->get();
            $data_kelas_smp = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'smp')->get();
            $data_kelas_sma = \DB::table('dt_kelas')->where('dt_kelas_type', 'like', 'sma')->get();
            return view('pendaftaran')->with('data_kelas',$data_kelas)->with('data_kelas_tk',$data_kelas_tk)->with('data_kelas_sd',$data_kelas_sd)
            ->with('data_kelas_smp',$data_kelas_smp)->with('data_kelas_sma',$data_kelas_sma)->with('rules_register',$rules_register);
        }
    }

    public function registration_tk_pdf()
    {
        session_start();
        if(isset($_SESSION['available_print'])){
        $view = \View::make('registration_tk_pdf');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        \Session::forget('available_print');
        return $pdf->stream();
        } else {
            return redirect('registration');
        }
    }

    public function registration_sd_pdf($get_data)
    {
        $view = \View::make('registration_sd_pdf')->with('get_data',$get_data);;
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');

        ini_set('max_execution_time', 500);
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


