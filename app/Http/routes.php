<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {


Route::get('/', function () {
	session_start();
        if(isset($_SESSION['logged_in'])){
        	$dt_blog = \DB::table('dt_blog')->where([
                ['dt_blog_type', '=', 'news'],
                ])
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            return \View::make('welcome')->with('dt_blogs',$dt_blog);
        }
        else{
            $dt_blog = \DB::table('dt_blog')->where([
                ['dt_blog_type', '=', 'news'],
                ])
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            return \View::make('welcome')->with('dt_blogs',$dt_blog);
        }
});

Route::get('login', 'Controller@login');
Route::get('news', 'Controller@news');
Route::get('search_news2/', 'PostController@search_news2');
Route::get('search_news/{search_news?}', 'PostController@search_news');

Route::get('agenda', 'Controller@agenda');
Route::get('search_agenda/{search_agenda?}', 'PostController@search_agenda');

Route::get('announcement', 'Controller@pengumuman');
Route::get('search_announcement/{search_announcement?}', 'PostController@search_announcement');

Route::get('article', 'Controller@artikel');
Route::get('search_article/{search_article?}', 'PostController@search_article');

Route::get('portal_tk', 'Controller@portal_tk');
Route::get('portal_tk/all', 'Controller@portal_tk_all');
Route::get('portal_tk/news', 'Controller@portal_tk_news');
Route::get('portal_tk/agenda', 'Controller@portal_tk_agenda');
Route::get('portal_tk/announcement', 'Controller@portal_tk_announcement');
Route::get('portal_tk/article', 'Controller@portal_tk_article');

Route::get('portal_sd', 'Controller@portal_sd');
Route::get('portal_sd/all', 'Controller@portal_sd_all');
Route::get('portal_sd/news', 'Controller@portal_sd_news');
Route::get('portal_sd/agenda', 'Controller@portal_sd_agenda');
Route::get('portal_sd/announcement', 'Controller@portal_sd_announcement');
Route::get('portal_sd/article', 'Controller@portal_sd_article');

Route::get('portal_smp', 'Controller@portal_smp');
Route::get('portal_smp/all', 'Controller@portal_smp_all');
Route::get('portal_smp/news', 'Controller@portal_smp_news');
Route::get('portal_smp/agenda', 'Controller@portal_smp_agenda');
Route::get('portal_smp/announcement', 'Controller@portal_smp_announcement');
Route::get('portal_smp/article', 'Controller@portal_smp_article');

Route::get('portal_sma', 'Controller@portal_sma');
Route::get('portal_sma/all', 'Controller@portal_sma_all');
Route::get('portal_sma/news', 'Controller@portal_sma_news');
Route::get('portal_sma/agenda', 'Controller@portal_sma_agenda');
Route::get('portal_sma/announcement', 'Controller@portal_sma_announcement');
Route::get('portal_sma/article', 'Controller@portal_sma_article');

Route::get('view/{id}', 'Controller@view');
Route::get('registration', 'Controller@pendaftaran');
Route::get('registration/TK-PDF', 'Controller@registration_tk_pdf');
Route::get('registration/SD-PDF', 'Controller@registration_sd_pdf');
Route::get('registration/SMP-PDF', 'Controller@registration_smp_pdf');
Route::get('registration/SMA-PDF', 'Controller@registration_sma_pdf');

Route::get('manage', 'AdminController@admin');
Route::get('manage/all', 'AdminController@manage_all');
Route::get('manage/news', 'AdminController@manage_news');
Route::get('manage/agenda', 'AdminController@manage_agenda');
Route::get('manage/announcement', 'AdminController@manage_announcement');
Route::get('manage/article', 'AdminController@manage_article');

Route::get('manage_teacher/master_teacher', 'AdminController@master_teacher');
Route::post('manage_teacher/save_master_teacher', 'AdminController@save_master_teacher');
Route::get('manage_teacher/edit_master_teacher/{id}', 'AdminController@edit_master_teacher');
Route::post('manage_teacher/save_edit_master_teacher', 'AdminController@save_edit_master_teacher');
Route::get('manage_teacher/delete_master_teacher/{id}', 'AdminController@delete_master_teacher');
Route::get('manage_teacher/export_data/xls', 'PostController@exportxls_data_master_teacher');
Route::get('manage_teacher/export_data/xlsx', 'PostController@exportxlsx_data_master_teacher');
Route::get('manage_teacher/export_data/csv', 'PostController@exportcsv_data_master_teacher');
Route::get('manage_teacher/export_data/{$type}', 'PostController@export_data_master_teacher');
Route::get('manage_teacher/import_data/', 'PostController@import_data_master_teacher');

Route::get('manage_teacher/schedule_teacher', 'AdminController@teacher_sch');
Route::post('manage_teacher/save_schedule_teacher', 'AdminController@save_teacher_sch');
Route::get('manage_teacher/edit_schedule_teacher/{id}', 'AdminController@edit_teacher_sch');
Route::post('manage_teacher/update_schedule_teacher', 'AdminController@update_teacher_sch');
Route::get('manage_teacher/delete_schedule_teacher/{id}', 'AdminController@delete_teacher_sch');

Route::get('manage_feature/master_feature', 'AdminController@master_feature');
Route::post('manage_feature/save_feature', 'AdminController@save_feature');
Route::get('manage_feature/edit_feature/{id}', 'AdminController@edit_feature');
Route::post('manage_feature/update_feature', 'AdminController@update_feature');
Route::get('manage_feature/delete_feature/{id}', 'AdminController@delete_feature');

Route::get('manage_all_account/export_data/xls', 'PostController@exportxls_data_master_all_account');
Route::get('manage_all_account/export_data/xlsx', 'PostController@exportxlsx_data_master_all_account');
Route::get('manage_all_account/export_data/csv', 'PostController@exportcsv_data_master_all_account');

Route::get('manage_parent/export_data/xls', 'PostController@exportxls_data_parent');
Route::get('manage_parent/export_data/xlsx', 'PostController@exportxlsx_data_parent');
Route::get('manage_parent/export_data/csv', 'PostController@exportcsv_data_parent');

Route::post('login_staff', 'LoginController@login_staff');
Route::post('login_teacher', 'LoginController@login_teacher');
Route::post('login_parent', 'LoginController@login_parent');
Route::post('login_student', 'LoginController@login_student');

Route::get('manage_post/master_post', 'PostController@master_post');
Route::post('manage_post/save_post', 'PostController@save_post');

Route::get('/images/{filename}',
    function ($filename)
{
    $path = storage_path() . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('manage_post/edit_post/{id}', 'PostController@edit_post');
Route::post('manage_post/save_edit_post', 'PostController@save_edit_post');
Route::get('manage_post/delete_post/{id}', 'PostController@delete_post');
Route::post('save_comment', 'PostController@save_comment');
Route::get('logout', 'LoginController@logout');

Route::get('search_post_tk/{search_tk?}', 'PostController@search_post_tk');
Route::get('search_post_sd/{search_sd?}', 'PostController@search_post_sd');
Route::get('search_post_smp/{search_smp?}', 'PostController@search_post_smp');
Route::get('search_post_sma/{search_sma?}', 'PostController@search_post_sma');
Route::get('search_post_admin/{search_admin?}', 'PostController@search_post_admin');

Route::post('uploadimagedrag', 'ImageController@uploadDragAndDropCKEDITOR');
Route::post('uploadimagefilebrowser', 'ImageController@uploadFileBrowserCKEDITOR');

Route::get('manage_account/all_account', 'AdminController@manage_all_account');
Route::post('manage_account/save_account', 'AdminController@save_account');
Route::get('manage_account/edit_account/{id}', 'AdminController@edit_account');
Route::post('manage_account/update_account', 'AdminController@update_account');
Route::get('manage_account/delete_account/{id}', 'AdminController@delete_account');

Route::get('manage_parent/master_parent', 'AdminController@manage_parent');
Route::post('manage_parent/save_parent', 'AdminController@save_parent');
Route::get('manage_parent/edit_parent/{id}', 'AdminController@edit_parent');
Route::post('manage_parent/update_parent', 'AdminController@update_parent');
Route::get('manage_parent/delete_parent/{id}', 'AdminController@delete_parent');

Route::get('manage_post/my_post', 'AdminController@my_post');

Route::get('manage_post/master_type_post', 'AdminController@master_type_post');
Route::post('manage_post/save_master_type_post/', 'AdminController@save_master_type_post');
Route::get('manage_post/edit_master_type_post/{id}', 'AdminController@edit_master_type_post');
Route::post('manage_post/update_master_type_post', 'AdminController@update_master_type_post');
Route::get('manage_post/delete_master_type_post/{id}', 'AdminController@delete_master_type_post');

Route::get('manage_post/master_class_post', 'AdminController@master_class_post');
Route::get('manage_post/edit_master_class_post/{id}', 'AdminController@edit_master_class_post');
Route::post('manage_post/save_master_class_post', 'AdminController@save_master_class_post');
Route::post('manage_post/update_master_class_post', 'AdminController@update_master_class_post');
Route::get('manage_post/delete_master_class_post/{id}', 'AdminController@delete_master_class_post');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
// your routes here
});