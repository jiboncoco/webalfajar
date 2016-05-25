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
      session_start();
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
    if(session('akses_type') == "staff"){
      return redirect(url('manage'));
    } 
    else{
      return redirect(url('manage_post/my_post'));
    }

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


    public function search_news($search_news="")
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                              ['dt_blog_title', 'LIKE', '%'.$search_news.'%'],
                                              ['dt_blog_type', '=', 'news']
                                              ])->orderBy('id', 'desc')->get();
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

    public function search_agenda($search_agenda="")
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                              ['dt_blog_title', 'LIKE', '%'.$search_agenda.'%'],
                                              ['dt_blog_type', '=', 'agenda']
                                              ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_all_agenda) {
            $string = strip_tags($dt_blog_all_agenda->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_all_agenda->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_all_agenda->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_all_agenda->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_all_agenda->dt_blog_create_by ." - ".($dt_blog_all_agenda->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_all_agenda->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_article($search_article="")
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                              ['dt_blog_title', 'LIKE', '%'.$search_article.'%'],
                                              ['dt_blog_type', '=', 'article']
                                              ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_all_article) {
            $string = strip_tags($dt_blog_all_article->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_all_article->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_all_article->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_all_article->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_all_article->dt_blog_create_by ." - ".($dt_blog_all_article->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_all_article->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_announcement($search_announcement="")
    {
        $i = 1;
        $data = \DB::table('dt_blog')->where([
                                              ['dt_blog_title', 'LIKE', '%'.$search_announcement.'%'],
                                              ['dt_blog_type', '=', 'announcement']
                                              ])->orderBy('id', 'desc')->get();
        // return $data;
        foreach ($data as $dt_blog_all_announcement) {
            $string = strip_tags($dt_blog_all_announcement->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo 
                "<a href=".url('view/'.$dt_blog_all_announcement->id).">
                <div class=\"content1-box\">
                  <img class=\"cb-img\" src=".url('images/'.$dt_blog_all_announcement->cover_photo)." />
                  <div class=\"cb-title\">
                    ".$dt_blog_all_announcement->dt_blog_title."
                  </div>
                  <div class=\"cb-desc\">
                  ".$string."
                
                  </div>
                  <div class=\"cb-inf\">
                    <i class=\"fa fa-user\"></i> ".$dt_blog_all_announcement->dt_blog_create_by ." - ".($dt_blog_all_announcement->dt_blog_by)."
                    <p class=\"cb-date\">
                      ".$dt_blog_all_announcement->created_at."
                    </p>
                  </div>
                </div>
                </a>";
        $i++;
        }
    }

    public function search_post_tk($search_tk="")
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

    public function search_post_sd($search_sd="")
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

    public function search_post_smp($search_smp="")
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

    public function search_post_sma($search_sma="")
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

    public function search_post_admin($search_admin="")
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
                "<div class=\"detail-news\">
                <a href=".url('view/'.$dt_blog_admin->id).">
                <div class=\"img-detail-news\">
                  <img class=\"img-dn\" src=".url('images/'.$dt_blog_admin->cover_photo)." />
                </div>
                  <div class=\"title-detail-news\">
                    ".$dt_blog_admin->dt_blog_title."
                  </div>
                  <div class=\"content-detail-news\">
                  ".$string."
                
                  </div>
                  </a>
                  <div class=\"attr\">
                  <hr/>
                  <label><a href=".url('manage_post/edit_post/'.$dt_blog_admin->id)."> <i style=\"font-size:24px;margin-right:20px;\" class=\"fa fa-pencil-square-o\"></i> </a></label>
                  <label><a href=".url('manage_post/delete_post/'.$dt_blog_admin->id)."> <i style=\"font-size:24px;color:rgb(202, 65, 65)\" class=\"fa fa-trash\"></i> </a></label>
                </div>
                </div>";
        $i++;
        }
    }

    public function exportxls_data_master_teacher()
    {

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Teacher', function($excel) use ($data_teacher)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher)
          {
              $sheet->fromArray($data_teacher);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_teacher()
    {

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Teacher', function($excel) use ($data_teacher)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher)
          {
              $sheet->fromArray($data_teacher);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_teacher()
    {

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Teacher', function($excel) use ($data_teacher)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher)
          {
              $sheet->fromArray($data_teacher);
          });
      })->download('csv');

    }

    public function exportxls_data_master_all_account()
    {

      $data_account = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_password','akses.akses_status_data')->get()->toArray();
      return \Excel::create('Master_Data_Account', function($excel) use ($data_account)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_account)
          {
              $sheet->fromArray($data_account);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_all_account()
    {

      $data_account = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_password','akses.akses_status_data')->get()->toArray();
      return \Excel::create('Master_Data_Account', function($excel) use ($data_account)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_account)
          {
              $sheet->fromArray($data_account);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_all_account()
    {

      $data_parent = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_password','akses.akses_status_data')->get()->toArray();
      return \Excel::create('Master_Data_Parent', function($excel) use ($data_parent)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_parent)
          {
              $sheet->fromArray($data_parent);
          });
      })->download('csv');

    }

    public function exportxls_data_parent()
    {

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Parent', function($excel) use ($data_parent)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_parent)
          {
              $sheet->fromArray($data_parent);
          });
      })->download('xls');

    }

        public function exportxlsx_data_parent()
    {

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Parent', function($excel) use ($data_parent)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_parent)
          {
              $sheet->fromArray($data_parent);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_parent()
    {

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Parent', function($excel) use ($data_parent)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_parent)
          {
              $sheet->fromArray($data_parent);
          });
      })->download('csv');

    }



    public function import_data_master_teacher()
    {

      if(\Input::hasFile('import_data_master_teacher'))
      {
        $path = \Input::file('import_data_master_teacher')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_teacher_nip' => $value->nip, 
                        'dt_teacher_name' => $value->name,
                        'dt_teacher_gender' => $value->gender,
                        'dt_teacher_dobplace' => $value->dobplace,
                        'dt_teacher_religion' => $value->religion,
                        'dt_teacher_position' => $value->position,
                        'dt_teacher_age' => $value->age,
                        'dt_teacher_bloodtype' => $value->bloodtype,
                        'dt_teacher_for' => $value->for,
                        'dt_teacher_email' => $value->email,
                        'dt_teacher_contact' => $value->contact,
                        'dt_teacher_address' => $value->address,
                        'dt_teacher_code_absen' => $value->code_absen,
                        'dt_teacher_name_img' => $value->name_img,
                        'dt_teacher_statuslog' => $value->statuslog,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_blog')->insert($insert);
            dd('Insert Record Successfully!');
          }
        }
      }
      return back();
    }

    public function load_data_home()
    {
      $yayasan_vimi = \App\dt_feature::where('feature_to', 'YAYASAN', 'AND', 'feature_for', 'visi-misi');
      $yayasan_edu = \App\dt_feature::where('feature_to', 'YAYASAN', 'AND', 'feature_for', 'pendidikan');
      $yayasan_galery = \App\dt_feature::where('feature_to', 'YAYASAN', 'AND', 'feature_for', 'galery');
      $yayasan_profile = \App\dt_feature::where('feature_to', 'YAYASAN', 'AND', 'feature_for', 'profile');

      
    }

}         