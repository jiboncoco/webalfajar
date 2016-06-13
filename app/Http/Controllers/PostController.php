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
        $uname = \App\akses::where('akses_email', session('akses_email'))->get();
        $m_blog = \App\m_blog::all();
        $m_kelas = \App\m_kelas::all();
      return \View::make('master_post')->with('request',$request)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas)->with('uname',$uname);
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
      $post->dt_blog_create_by = session('akses_email');
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
      return redirect(url('manage_post/my_post'));
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
        $comm->dt_comment_create_by = session('akses_email');

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
            $uname = \App\akses::where('akses_email', session('akses_email'))->get();
            $m_blog = \App\m_blog::all();
            $m_kelas = \App\m_kelas::all();
            $data = array('data'=>\App\dt_blog::find($id));
            return view('edit_post')->with($data)->with('m_blogs', $m_blog)->with('m_kelass', $m_kelas)->with('uname',$uname);
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
        $post->dt_blog_update_by = session('akses_email');
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

        return redirect(url('manage_post/my_post'));
    }

    public function delete_post($id)
    {
       session_start();
        if(isset($_SESSION['logged_in'])){
            \App\dt_blog::find($id)->delete();
            return redirect( url('manage_post/my_post'));
        }
        else{
            return redirect(url('login'));
        }
    }


    public function search_news($search_news="")
    {
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

        }
    }

    public function search_agenda($search_agenda="")
    {
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

        }
    }

    public function search_article($search_article="")
    {
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

        }
    }

    public function search_announcement($search_announcement="")
    {
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

        }
    }

    public function search_post_tk($search_tk="")
    {
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

        }
    }

    public function search_post_sd($search_sd="")
    {
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

        }
    }

    public function search_post_smp($search_smp="")
    {
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

        }
    }

    public function search_post_sma($search_sma="")
    {
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

        }
    } 

    public function search_post_admin($search_admin="")
    {
        $data = \DB::table('dt_blog')->where([
                                               ['dt_blog_title', 'LIKE', '%'.$search_admin.'%'],
                                               ['dt_blog_create_by','=',session('akses_email')]
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

        }
    }

    public function exportxls_data_master_teacher()
    {

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_type','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_bplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
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

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_type','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_bplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
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

      $data_teacher = \App\dt_teacher::select('dt_teacher.dt_teacher_nip','dt_teacher.dt_teacher_type','dt_teacher.dt_teacher_name','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_gender','dt_teacher.dt_teacher_dobplace','dt_teacher.dt_teacher_bplace','dt_teacher.dt_teacher_religion','dt_teacher.dt_teacher_position','dt_teacher.dt_teacher_age','dt_teacher.dt_teacher_bloodtype','dt_teacher.dt_teacher_for','dt_teacher.dt_teacher_email','dt_teacher.dt_teacher_contact','dt_teacher.dt_teacher_address','dt_teacher.dt_teacher_code_absen','dt_teacher.dt_teacher_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Teacher', function($excel) use ($data_teacher)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher)
          {
              $sheet->fromArray($data_teacher);
          });
      })->download('csv');

    }

    public function exportxls_data_master_student()
    {

      $data_student = \App\dt_student::select('dt_student.dt_student_nisn','dt_student.dt_student_name','dt_student.dt_student_grade','dt_student.dt_student_kelas','dt_student.dt_student_email','dt_student.dt_student_gender','dt_student.dt_student_dobplace','dt_student.dt_student_bplace','dt_student.dt_student_religion','dt_student.dt_student_nameparent','dt_student.dt_student_bloodtype','dt_student.dt_student_email','dt_student.dt_student_contact','dt_student.dt_student_address','dt_student.dt_student_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Student', function($excel) use ($data_student)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_student)
          {
              $sheet->fromArray($data_student);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_student()
    {

      $data_student = \App\dt_student::select('dt_student.dt_student_nisn','dt_student.dt_student_name','dt_student.dt_student_grade','dt_student.dt_student_kelas','dt_student.dt_student_email','dt_student.dt_student_gender','dt_student.dt_student_dobplace','dt_student.dt_student_bplace','dt_student.dt_student_religion','dt_student.dt_student_nameparent','dt_student.dt_student_bloodtype','dt_student.dt_student_email','dt_student.dt_student_contact','dt_student.dt_student_address','dt_student.dt_student_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Student', function($excel) use ($data_student)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_student)
          {
              $sheet->fromArray($data_student);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_student()
    {

      $data_student = \App\dt_student::select('dt_student.dt_student_nisn','dt_student.dt_student_name','dt_student.dt_student_grade','dt_student.dt_student_kelas','dt_student.dt_student_email','dt_student.dt_student_gender','dt_student.dt_student_dobplace','dt_student.dt_student_bplace','dt_student.dt_student_religion','dt_student.dt_student_nameparent','dt_student.dt_student_bloodtype','dt_student.dt_student_email','dt_student.dt_student_contact','dt_student.dt_student_address','dt_student.dt_student_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Student', function($excel) use ($data_student)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_student)
          {
              $sheet->fromArray($data_student);
          });
      })->download('csv');

    }

    public function exportxls_data_master_class()
    {

      $data_kelas = \App\dt_kelas::select('dt_kelas.dt_kelas_type','dt_kelas.dt_kelas_name','dt_kelas.dt_kelas_status')->get()->toArray();
      return \Excel::create('Master_Data_Kelas', function($excel) use ($data_kelas)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas)
          {
              $sheet->fromArray($data_kelas);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_class()
    {

      $data_kelas = \App\dt_kelas::select('dt_kelas.dt_kelas_type','dt_kelas.dt_kelas_name','dt_kelas.dt_kelas_status')->get()->toArray();
      return \Excel::create('Master_Data_Kelas', function($excel) use ($data_kelas)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas)
          {
              $sheet->fromArray($data_kelas);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_class()
    {

      $data_kelas = \App\dt_kelas::select('dt_kelas.dt_kelas_type','dt_kelas.dt_kelas_name','dt_kelas.dt_kelas_status')->get()->toArray();
      return \Excel::create('Master_Data_Kelas', function($excel) use ($data_kelas)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas)
          {
              $sheet->fromArray($data_kelas);
          });
      })->download('csv');

    }

    public function exportxls_data_master_class_sch()
    {

      $data_kelas_sch = \App\sch_class::select('sch_class.sch_class_forclass','sch_class.sch_class_day','sch_class.sch_class_month','sch_class.sch_class_year','sch_class.sch_class_time','sch_class.sch_class_teacher','sch_class.sch_class_schedule')->get()->toArray();
      return \Excel::create('Master_Data_Kelas_Schedule', function($excel) use ($data_kelas_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas_sch)
          {
              $sheet->fromArray($data_kelas_sch);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_class_sch()
    {

      $data_kelas_sch = \App\sch_class::select('sch_class.sch_class_forclass','sch_class.sch_class_day','sch_class.sch_class_month','sch_class.sch_class_year','sch_class.sch_class_time','sch_class.sch_class_teacher','sch_class.sch_class_schedule')->get()->toArray();
      return \Excel::create('Master_Data_Kelas_Schedule', function($excel) use ($data_kelas_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas_sch)
          {
              $sheet->fromArray($data_kelas_sch);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_class_sch()
    {

      $data_kelas_sch = \App\sch_class::select('sch_class.sch_class_forclass','sch_class.sch_class_day','sch_class.sch_class_month','sch_class.sch_class_year','sch_class.sch_class_time','sch_class.sch_class_teacher','sch_class.sch_class_schedule')->get()->toArray();
      return \Excel::create('Master_Data_Kelas_Schedule', function($excel) use ($data_kelas_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_kelas_sch)
          {
              $sheet->fromArray($data_kelas_sch);
          });
      })->download('csv');

    }

    public function exportxls_data_master_teacher_sch()
    {

      $data_teacher_sch = \App\dt_sch::select('dt_sch.sch_code','dt_sch.sch_days','dt_sch.sch_month','dt_sch.sch_year','dt_sch.sch_time','dt_sch.sch_task')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Schedule', function($excel) use ($data_teacher_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_sch)
          {
              $sheet->fromArray($data_teacher_sch);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_teacher_sch()
    {

      $data_teacher_sch = \App\dt_sch::select('dt_sch.sch_code','dt_sch.sch_days','dt_sch.sch_month','dt_sch.sch_year','dt_sch.sch_time','dt_sch.sch_task')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Schedule', function($excel) use ($data_teacher_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_sch)
          {
              $sheet->fromArray($data_teacher_sch);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_teacher_sch()
    {

      $data_teacher_sch = \App\dt_sch::select('dt_sch.sch_code','dt_sch.sch_days','dt_sch.sch_month','dt_sch.sch_year','dt_sch.sch_time','dt_sch.sch_task')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Schedule', function($excel) use ($data_teacher_sch)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_sch)
          {
              $sheet->fromArray($data_teacher_sch);
          });
      })->download('csv');

    }

    public function exportxls_data_master_all_account()
    {

      $data_account = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_email','akses.akses_status_data')->get()->toArray();
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

      $data_account = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_email','akses.akses_status_data')->get()->toArray();
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

      $data_parent = \App\akses::select('akses.akses_code','akses.akses_type','akses.akses_username','akses.akses_email','akses.akses_status_data')->get()->toArray();
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

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_email','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
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

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_email','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
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

      $data_parent = \App\dt_parent::select('dt_parent.dt_parent_nisn','dt_parent.dt_parent_name','dt_parent.dt_parent_email','dt_parent.dt_parent_contact','dt_parent.dt_parent_email','dt_parent.dt_parent_age','dt_parent.dt_parent_address','dt_parent.dt_parent_statuslog')->get()->toArray();
      return \Excel::create('Master_Data_Parent', function($excel) use ($data_parent)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_parent)
          {
              $sheet->fromArray($data_parent);
          });
      })->download('csv');

    }

    public function exportxls_data_master_teacher_recap()
    {

      $data_teacher_recap = \App\dt_rekap::select('dt_rekap.dt_rekap_type','dt_rekap.dt_rekap_for','dt_rekap.dt_rekap_class','dt_rekap.dt_rekap_name_student','dt_rekap.dt_rekap_nilai')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Recap', function($excel) use ($data_teacher_recap)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_recap)
          {
              $sheet->fromArray($data_teacher_recap);
          });
      })->download('xls');

    }

        public function exportxlsx_data_master_teacher_recap()
    {

      $data_teacher_recap = \App\dt_rekap::select('dt_rekap.dt_rekap_type','dt_rekap.dt_rekap_for','dt_rekap.dt_rekap_class','dt_rekap.dt_rekap_name_student','dt_rekap.dt_rekap_nilai')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Recap', function($excel) use ($data_teacher_recap)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_recap)
          {
              $sheet->fromArray($data_teacher_recap);
          });
      })->download('xlsx');

    }

        public function exportcsv_data_master_teacher_recap()
    {

      $data_teacher_recap = \App\dt_rekap::select('dt_rekap.dt_rekap_type','dt_rekap.dt_rekap_for','dt_rekap.dt_rekap_class','dt_rekap.dt_rekap_name_student','dt_rekap.dt_rekap_nilai')->get()->toArray();
      return \Excel::create('Master_Data_Teacher_Recap', function($excel) use ($data_teacher_recap)
      {
          $excel->sheet('mySheet', function($sheet) use ($data_teacher_recap)
          {
              $sheet->fromArray($data_teacher_recap);
          });
      })->download('csv');

    }

    public function import_data_master_teacher()
    {

      if(Input::hasFile('import_data_master_teacher'))
      {
        $path = Input::file('import_data_master_teacher')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_teacher_nip' => $value->dt_teacher_nip, 
                        'dt_teacher_name' => $value->dt_teacher_name,
                        'dt_teacher_type' => $value->dt_teacher_type,
                        'dt_teacher_gender' => $value->dt_teacher_gender,
                        'dt_teacher_dobplace' => $value->dt_teacher_dobplace,
                        'dt_teacher_bplace' => $value->dt_teacher_bplace,
                        'dt_teacher_religion' => $value->dt_teacher_religion,
                        'dt_teacher_position' => $value->dt_teacher_position,
                        'dt_teacher_age' => $value->dt_teacher_age,
                        'dt_teacher_bloodtype' => $value->dt_teacher_bloodtype,
                        'dt_teacher_for' => $value->dt_teacher_for,
                        'dt_teacher_email' => $value->dt_teacher_email,
                        'dt_teacher_contact' => $value->dt_teacher_contact,
                        'dt_teacher_address' => $value->dt_teacher_address,
                        'dt_teacher_code_absen' => $value->dt_teacher_code_absen,
                        'dt_teacher_statuslog' => $value->dt_teacher_statuslog,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_teacher')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_account()
    {

      if(Input::hasFile('import_data_master_account'))
      {
        $path = Input::file('import_data_master_account')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['akses_type' => $value->akses_type, 
                        'akses_code' => $value->akses_code,
                        'akses_status_data' => $value->akses_status_data,
                        'akses_username' => $value->akses_username,
                        'akses_password' => $value->akses_password,
                        'akses_email' => $value->akses_email,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('akses')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_teacher_recap()
    {

      if(Input::hasFile('import_data_master_teacher_recap'))
      {
        $path = Input::file('import_data_master_teacher_recap')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_rekap_type' => $value->dt_rekap_type, 
                        'dt_rekap_name_student' => $value->dt_rekap_name_student,
                        'dt_rekap_nilai' => $value->dt_rekap_nilai,
                        'dt_rekap_for' => $value->dt_rekap_for,
                        'dt_rekap_class' => $value->dt_rekap_class,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_rekap')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_teacher_sch()
    {

      if(Input::hasFile('import_data_master_teacher_sch'))
      {
        $path = Input::file('import_data_master_teacher_sch')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['sch_code' => $value->sch_code, 
                        'sch_days' => $value->sch_days,
                        'sch_month' => $value->sch_month,
                        'sch_year' => $value->sch_year,
                        'sch_time' => $value->sch_time,
                        'sch_task' => $value->sch_task,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_sch')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_student()
    {

      if(Input::hasFile('import_data_master_student'))
      {
        $path = Input::file('import_data_master_student')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_student_nisn' => $value->dt_student_nisn, 
                        'dt_student_name' => $value->dt_student_name,
                        'dt_student_gender' => $value->dt_student_gender,
                        'dt_student_dobplace' => $value->dt_student_dobplace,
                        'dt_student_bplace' => $value->dt_student_bplace,
                        'dt_student_religion' => $value->dt_student_religion,
                        'dt_student_grade' => $value->dt_student_grade,
                        'dt_student_age' => $value->dt_student_age,
                        'dt_student_bloodtype' => $value->dt_student_bloodtype,
                        'dt_student_kelas' => $value->dt_student_kelas,
                        'dt_student_email' => $value->dt_student_email,
                        'dt_student_contact' => $value->dt_student_contact,
                        'dt_student_address' => $value->dt_student_address,
                        'dt_student_nameparent' => $value->dt_student_nameparent,
                        'dt_student_statuslog' => $value->dt_student_statuslog,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_student')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_parent()
    {

      if(Input::hasFile('import_data_master_parent'))
      {
        $path = Input::file('import_data_master_parent')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_parent_nisn' => $value->dt_parent_nisn, 
                        'dt_parent_name' => $value->dt_parent_name,
                        'dt_parent_age' => $value->dt_parent_age,
                        'dt_parent_email' => $value->dt_parent_email,
                        'dt_parent_contact' => $value->dt_parent_contact,
                        'dt_parent_address' => $value->dt_parent_address,
                        'dt_parent_statuslog' => $value->dt_parent_statuslog,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_parent')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_class()
    {

      if(Input::hasFile('import_data_master_class'))
      {
        $path = Input::file('import_data_master_class')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['dt_kelas_type' => $value->dt_kelas_type, 
                        'dt_kelas_name' => $value->dt_kelas_name,
                        'dt_kelas_status' => $value->dt_kelas_status,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('dt_kelas')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

    public function import_data_master_class_sch()
    {

      if(Input::hasFile('import_data_master_class_sch'))
      {
        $path = Input::file('import_data_master_class_sch')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['sch_class_forclass' => $value->sch_class_forclass, 
                        'sch_class_day' => $value->sch_class_day,
                        'sch_class_month' => $value->sch_class_month,
                        'sch_class_year' => $value->sch_class_year,
                        'sch_class_time' => $value->sch_class_time,
                        'sch_class_teacher' => $value->sch_class_teacher,
                        'sch_class_schedule' => $value->sch_class_schedule,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('sch_class')->insert($insert);
            
          }
        }
      }
      return redirect()->back();
    }

}         