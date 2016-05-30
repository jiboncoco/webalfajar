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


Route::get('/', 'Controller@Home');

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

Route::group(['prefix'=>'portal_tk'], function(){
    Route::get('', 'Controller@portal_tk');
    Route::get('all', 'Controller@portal_tk_all');
    Route::get('news', 'Controller@portal_tk_news');
    Route::get('agenda', 'Controller@portal_tk_agenda');
    Route::get('announcement', 'Controller@portal_tk_announcement');
    Route::get('article', 'Controller@portal_tk_article');
});

Route::get('manage_message/message_staff', 'AksesController@message_staff');
Route::get('manage_message/message_root', 'AksesController@message_staff');
Route::get('manage_message/message_root+', 'AksesController@message_staff');
Route::get('manage_message/message_student', 'AksesController@message_student');
Route::get('manage_message/message_parent', 'AksesController@message_parent');
Route::get('manage_message/message_teacher', 'AksesController@message_teacher');

Route::get('manage_message/message_staff/compose', 'AksesController@compose_message_staff');
Route::get('manage_message/message_root/compose', 'AksesController@compose_message_staff');
Route::get('manage_message/message_root+/compose', 'AksesController@compose_message_staff');
Route::get('manage_message/message_teacher/compose', 'AksesController@compose_message_teacher');
Route::get('manage_message/message_student/compose', 'AksesController@compose_message_student');
Route::get('manage_message/message_parent/compose', 'AksesController@compose_message_parent');

Route::post('manage_message/message_staff/send', 'AksesController@save_message_staff');
Route::post('manage_message/message_root/send', 'AksesController@save_message_staff');
Route::post('manage_message/message_root+/send', 'AksesController@save_message_staff');
Route::post('manage_message/message_teacher/send', 'AksesController@save_message_teacher');
Route::post('manage_message/message_student/send', 'AksesController@save_message_student');
Route::post('manage_message/message_parent/send', 'AksesController@save_message_parent');

Route::get('manage_message/message_staff/sent', 'AksesController@sent_message_staff');
Route::get('manage_message/message_root/sent', 'AksesController@sent_message_staff');
Route::get('manage_message/message_root+/sent', 'AksesController@sent_message_staff');
Route::get('manage_message/message_teacher/sent', 'AksesController@sent_message_teacher');
Route::get('manage_message/message_student/sent', 'AksesController@sent_message_student');
Route::get('manage_message/message_parent/sent', 'AksesController@sent_message_parent');

Route::get('manage_message/message_staff/delete/{id}', 'AksesController@delete_message_staff');
Route::get('manage_message/message_root/delete/{id}', 'AksesController@delete_message_staff');
Route::get('manage_message/message_root+/delete/{id}', 'AksesController@delete_message_staff');
Route::get('manage_message/message_teacher/delete/{id}', 'AksesController@delete_message_teacher');
Route::get('manage_message/message_student/delete/{id}', 'AksesController@delete_message_student');
Route::get('manage_message/message_parent/delete/{id}', 'AksesController@delete_message_parent');



Route::get('manage_message/message_teacher/read_message/inbox/{id}', 'AksesController@teacher_read_message_inbox');
Route::get('manage_message/message_student/read_message/inbox/{id}', 'AksesController@student_read_message_inbox');
Route::get('manage_message/message_parent/read_message/inbox/{id}', 'AksesController@parent_read_message_inbox');
Route::get('manage_message/message_staff/read_message/inbox/{id}', 'AksesController@staff_read_message_inbox');
Route::get('manage_message/message_root/read_message/inbox/{id}', 'AksesController@staff_read_message_inbox');
Route::get('manage_message/message_root+/read_message/inbox/{id}', 'AksesController@staff_read_message_inbox');

Route::get('manage_message/message_teacher/read_message/sent/{id}', 'AksesController@teacher_read_message_sent');
Route::get('manage_message/message_student/read_message/sent/{id}', 'AksesController@student_read_message_sent');
Route::get('manage_message/message_parent/read_message/sent/{id}', 'AksesController@parent_read_message_sent');
Route::get('manage_message/message_staff/read_message/sent/{id}', 'AksesController@staff_read_message_sent');
Route::get('manage_message/message_root/read_message/sent/{id}', 'AksesController@staff_read_message_sent');
Route::get('manage_message/message_root+/read_message/sent/{id}', 'AksesController@staff_read_message_sent');

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

//manage teacher staff

Route::get('manage_teacher/master_teacher', 'AdminController@master_teacher');
Route::post('manage_teacher/save_master_teacher', 'AdminController@save_master_teacher');
Route::get('manage_teacher/edit_master_teacher/{id}', 'AdminController@edit_master_teacher');
Route::post('manage_teacher/save_edit_master_teacher', 'AdminController@save_edit_master_teacher');
Route::get('manage_teacher/delete_master_teacher/{id}', 'AdminController@delete_master_teacher');
Route::get('manage_teacher/export_data/xls', 'PostController@exportxls_data_master_teacher');
Route::get('manage_teacher/export_data/xlsx', 'PostController@exportxlsx_data_master_teacher');
Route::get('manage_teacher/export_data/csv', 'PostController@exportcsv_data_master_teacher');
Route::post('manage_teacher/import_data_teacher', 'PostController@import_data_master_teacher');

//manage teacher personal

Route::get('manage_teacher/my_data', 'AksesController@teacher_my_data');
Route::get('manage_teacher/my_schedule', 'AksesController@teacher_my_schedule');
Route::get('manage_teacher/my_absen', 'AksesController@teacher_my_absen');
Route::get('manage_teacher/master_recap', 'AksesController@teacher_master_recap');
Route::get('manage_teacher/activity_student', 'AksesController@teacher_activity_student');
Route::get('manage_teacher/detail_student_and_parent', 'AksesController@teacher_detail_student_and_parent');
Route::get('manage_teacher/master_task', 'AksesController@teacher_master_task');
Route::get('manage_teacher/my_post', 'AdminController@my_post');
Route::get('manage_teacher/master_post', 'PostController@master_post');
Route::get('manage_teacher/edit_my_data/{id}', 'AdminController@edit_master_teacher');


Route::get('manage_student/master_student', 'AdminController@master_student');
Route::post('manage_student/save_master_student', 'AdminController@save_master_student');
Route::get('manage_student/edit_master_student/{id}', 'AdminController@edit_master_student');
Route::post('manage_student/update_master_student', 'AdminController@update_master_student');
Route::get('manage_student/delete_master_student/{id}', 'AdminController@delete_master_student');
Route::get('manage_student/export_data/xls', 'PostController@exportxls_data_master_student');
Route::get('manage_student/export_data/xlsx', 'PostController@exportxlsx_data_master_student');
Route::get('manage_student/export_data/csv', 'PostController@exportcsv_data_master_student');
Route::get('manage_student/export_data/{$type}', 'PostController@export_data_master_student');
Route::get('manage_student/import_data/', 'PostController@import_data_master_student');

//manage student personal
Route::get('manage_student/my_data', 'AksesController@student_my_data');
Route::get('manage_student/my_activity', 'AksesController@student_my_activity');
Route::get('manage_student/schedule_class', 'AksesController@student_schedule_class');
Route::get('manage_student/master_task', 'AksesController@student_master_task');
Route::get('manage_student/my_post', 'AdminController@my_post');
Route::get('manage_student/master_post', 'PostController@master_post');
Route::get('manage_student/edit_my_data/{id}', 'AdminController@edit_master_student');

//manage parent personal
Route::get('manage_parent/my_data', 'AksesController@parent_my_data');
Route::get('manage_parent/my_activity', 'AksesController@parent_my_activity');
Route::get('manage_parent/my_post', 'AdminController@my_post');
Route::get('manage_parent/master_post', 'PostController@master_post');
Route::get('manage_parent/edit_my_data/{id}', 'AdminController@edit_parent');

Route::get('manage_teacher/schedule_teacher', 'AdminController@teacher_sch');
Route::post('manage_teacher/save_schedule_teacher', 'AdminController@save_teacher_sch');
Route::get('manage_teacher/edit_schedule_teacher/{id}', 'AdminController@edit_teacher_sch');
Route::post('manage_teacher/update_schedule_teacher', 'AdminController@update_teacher_sch');
Route::get('manage_teacher/delete_schedule_teacher/{id}', 'AdminController@delete_teacher_sch');
Route::get('manage_teacher_sch/export_data/xls', 'PostController@exportxls_data_master_teacher_sch');
Route::get('manage_teacher_sch/export_data/xlsx', 'PostController@exportxlsx_data_master_teacher_sch');
Route::get('manage_teacher_sch/export_data/csv', 'PostController@exportcsv_data_master_teacher_sch');

Route::get('manage_feature/master_feature', 'AdminController@master_feature');
Route::post('manage_feature/save_feature', 'AdminController@save_feature');
Route::get('manage_feature/edit_feature/{id}', 'AdminController@edit_feature');
Route::post('manage_feature/update_feature', 'AdminController@update_feature');
Route::get('manage_feature/delete_feature/{id}', 'AdminController@delete_feature');

Route::get('manage_setting/edit_profile', 'AdminController@edit_profile');
Route::post('save_mailnews', 'AdminController@save_mailnews');

Route::get('alfajar/admin/sessionurl', 'AdminController@login_sadmin');
Route::get('login_sadmin', 'LoginController@login_sadmin');

Route::get('manage_class/master_schedule_class', 'AdminController@class_sch');
Route::get('manage_class/detail_schedule_class/{id}', 'AdminController@_detail_class_sch');
Route::post('manage_class/save_schedule_class', 'AdminController@save_class_sch');
Route::get('manage_class/edit_schedule_class/{id}', 'AdminController@edit_class_sch');
Route::post('manage_class/update_schedule_class', 'AdminController@update_class_sch');
Route::get('manage_class/delete_schedule_class/{id}', 'AdminController@delete_class_sch');
Route::get('manage_class_sch/export_data/xls', 'PostController@exportxls_data_master_class_sch');
Route::get('manage_class_sch/export_data/xlsx', 'PostController@exportxlsx_data_master_class_sch');
Route::get('manage_class_sch/export_data/csv', 'PostController@exportcsv_data_master_class_sch');

Route::get('manage_class/master_class', 'AdminController@master_class');
Route::post('manage_class/save_class', 'AdminController@save_class');
Route::get('manage_class/edit_class/{id}', 'AdminController@edit_class');
Route::post('manage_class/update_class', 'AdminController@update_class');
Route::get('manage_class/delete_class/{id}', 'AdminController@delete_class');
Route::get('manage_class/export_data/xls', 'PostController@exportxls_data_master_class');
Route::get('manage_class/export_data/xlsx', 'PostController@exportxlsx_data_master_class');
Route::get('manage_class/export_data/csv', 'PostController@exportcsv_data_master_class');

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
Route::post('login_sadmin', 'LoginController@login_sadmin');

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