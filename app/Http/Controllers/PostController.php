<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class PostController extends Controller
{
    public function master_post(Request $request)
    {
    	session_start();
    	if(isset($_SESSION['logged_in'])){
    		$m_blog = \App\m_blog::all();
    		$m_kelas = \App\m_kelas::all();
			return \View::make('master_post')->with('request',$request)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas);
		}
		else{
			return redirect('login')->with('request',$request);
		}	
    }

    public function save_post()
    {
        $post = new \App\dt_blog;
    	$post->dt_blog_type = Input::get('dt_blog_type');
    	$post->dt_blog_date_event = Input::get('dt_blog_date_event');
    	$post->dt_blog_title = Input::get('dt_blog_title');
    	$post->dt_blog_text = Input::get('dt_blog_text');
    	$post->dt_blog_for = Input::get('dt_blog_for');
    	$post->dt_blog_by = session('akses_type');
    	$post->dt_blog_create_by = session('akses_username');
        $post->slug = str_slug(Input::get('dt_blog_title'));

        if(Input::hasFile('cover_photo')){
            $cover_photo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('cover_photo')->getClientOriginalExtension();
        
            Input::file('cover_photo')->move(storage_path(),$cover_photo);
            $post->cover_photo = $cover_photo;
        }

    	$post->save();

		return redirect(url('manage'));
    }

    public function save_comment()
    {
        session_start();
        if(isset($_SESSION['logged_in'])){
        $comm = new \App\dt_comment;
        $comm->dt_comment_blog_id = Input::get('dt_comment_blog_id');
        $comm->dt_comment_text = Input::get('dt_comment_text');
        $comm->dt_comment_create_by = session('akses_username');

        $comm->save();

        return redirect()->back();
        }
        else{
            return redirect(url('login'));
        }
    }

    public function edit_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            $m_blog = \App\m_blog::all();
            $m_kelas = \App\m_kelas::all();
            $data = array('data'=>\App\dt_blog::find($id));
            return view('edit_post')->with($data)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas);
        }
        else{
            return redirect(url('login'));
        }
    }

    public function save_edit_post()
    {
        $post = \App\dt_blog::find(Input::get('id'));
        $post->dt_blog_type = Input::get('dt_blog_type');
        $post->dt_blog_date_event = Input::get('dt_blog_date_event');
        $post->dt_blog_title = Input::get('dt_blog_title');
        $post->dt_blog_text = Input::get('dt_blog_text');
        $post->dt_blog_for = Input::get('dt_blog_for');
        $post->dt_blog_by = session('akses_type');
        $post->dt_blog_update_by = session('akses_username');
        $post->slug = str_slug(Input::get('dt_blog_title'));

            if(Input::hasFile('cover_photo')){
            $cover_photo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('cover_photo')->getClientOriginalExtension();
        
            Input::file('cover_photo')->move(storage_path(),$cover_photo);
            $post->cover_photo = $cover_photo;
        }

        $post->save();

        return redirect(url('manage'));
    }

    public function delete_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_blog::find($id)->delete();
            return redirect( url('manage'));
        }
        else{
            return redirect(url('login'));
        }
    }


    public function search_post($search)
    {
        $i = 1;
        $data = \App\dt_blog::where('dt_blog_title', 'LIKE', '%'.$search.'%')->orderBy('id','desc')->get();
        // return $data;
        foreach ($data as $dt_blog_all_news) {
            $string = strip_tags($dt_blog_all_news->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_all_news->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_all_news->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_all_news->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_all_news->dt_blog_create_by ." - ".($dt_blog_all_news->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_all_news->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_post_tk($search_tk)
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_tk.'%'],
                                               ['dt_blog_for', '=', 'TK']
                                               ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_tk) {
            $string = strip_tags($dt_blog_tk->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_tk->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_tk->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_tk->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_tk->dt_blog_create_by ." - ".($dt_blog_tk->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_tk->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_post_sd($search_sd)
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_sd.'%'],
                                               ['dt_blog_for', '=', 'SD']
                                               ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_sd) {
            $string = strip_tags($dt_blog_sd->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_sd->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_sd->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_sd->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_sd->dt_blog_create_by ." - ".($dt_blog_sd->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_sd->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_post_smp($search_smp)
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_smp.'%'],
                                               ['dt_blog_for', '=', 'SMP']
                                               ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_smp) {
            $string = strip_tags($dt_blog_smp->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_smp->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_smp->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_smp->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_smp->dt_blog_create_by ." - ".($dt_blog_smp->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_smp->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_post_sma($search_sma)
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_sma.'%'],
                                               ['dt_blog_for', '=', 'SMA']
                                               ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_sma) {
            $string = strip_tags($dt_blog_sma->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_sma->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_sma->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_sma->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_sma->dt_blog_create_by ." - ".($dt_blog_sma->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_sma->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    } 

    public function search_post_admin($search_admin)
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_admin.'%'],
                                               ['dt_blog_create_by','=',session('akses_username')]
                                               ])->orderBy('id', 'desc')->take(6)->get();
        // return $data;
        foreach ($data as $dt_blog_admin) {
            $string = strip_tags($dt_blog_admin->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_admin->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_admin->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_admin->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_admin->dt_blog_create_by ." - ".($dt_blog_admin->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_admin->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }   

}
