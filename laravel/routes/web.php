<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DoctorController;
use App\Mail\WelcomeMail;
use App\Mail\WelcomeMail2;
use Illuminate\Support\Facades\Mail;

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();
});

Route::match(['get', 'post'], '/href2_{id}', 'App\Http\Controllers\UpdateController@edit');
Route::match(['get', 'post'], '/Editor_{id}', 'App\Http\Controllers\VvodController@form_for_edit');

Route::match(['get', 'post'], '/login', 'App\Http\Controllers\Log_inController@getStr');
Route::match(['get', 'post'], '/result_admins', 'App\Http\Controllers\Log_inController@result');
Route::match(['get', 'post'], '/quit', 'App\Http\Controllers\Log_inController@quit');

Route::match(['get', 'post'], '/weit', 'App\Http\Controllers\Log_inController@weit');
Route::match(['get', 'post'], '/weit_result', 'App\Http\Controllers\Log_inController@weit2');

Route::get('/Form_doctor_{ID_doctor}', 'App\Http\Controllers\StudentsApplicationsController@form');
Route::match(['get', 'post'], '/result_doctor_form_{id}', 'App\Http\Controllers\StudentsApplicationsController@result');

Route::get('/profile', 'App\Http\Controllers\Admin_applications@getVolAct_admin')->name('mains');

Route::get('/Navi_edit', 'App\Http\Controllers\EditNaviController@getContent')->name('mains');
Route::get('/Navi1_edit', 'App\Http\Controllers\EditNavi1Controller@getDoctor')->name('mains');
Route::get('/Navi2_edit', 'App\Http\Controllers\EditNavi1Controller@getVol')->name('mains');

Route::get('/href_edit_{id}', 'App\Http\Controllers\EditNaviController@getStr');

Route::get('/email', function() {
	Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail());
	return new WelcomeMail();
});

Route::get('/email2', function() {
    Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail2());
    return new WelcomeMail2();
});

Route::get('/email3', function() {
    Mail::to('ksvetova16@gmail.com')->send(new WelcomeMail3());
    return new WelcomeMail3();
});

Route::get('/table_forAdmin_vol', 'App\Http\Controllers\Admin_vol_app@getVolAct_admin')->name('mains');
Route::get('/table_forAdmin_doc', 'App\Http\Controllers\Admin_doc_app@getVolAct_admin')->name('mains');

Route::get('/', 'App\Http\Controllers\HomeController@getContent')->name('mains');

Route::get('/Navi1', 'App\Http\Controllers\DoctorController@getDoctor')->name('mains');

Route::get('/Navi2', 'App\Http\Controllers\VolController@getVol')->name('mains');

Route::match(['get', 'post'], '/result_doctor_form_{id}', 'App\Http\Controllers\StudentsApplicationsController@result');

Route::match(['get', 'post'], '/Form_activities_{ID_activity}', 'App\Http\Controllers\VolunteersApplicationsController@form');
Route::match(['get', 'post'], '/result_volunteer_form_{id}', 'App\Http\Controllers\VolunteersApplicationsController@result');

Route::match(['get', 'post'], '/Edit_news_{id}', 'App\Http\Controllers\EditNewsController@form_for_edit');
Route::match(['get', 'post'], '/result_editing_news_{id}', 'App\Http\Controllers\EditNewsController@result_for_edit');

Route::match(['get', 'post'], '/Add_news', 'App\Http\Controllers\EditNewsController@form_for_add');
Route::match(['get', 'post'], '/result_adding_news', 'App\Http\Controllers\EditNewsController@result_for_add');

Route::match(['get', 'post'], '/result_deleting_news_{id}', 'App\Http\Controllers\EditNewsController@result_for_delete');

Route::match(['get', 'post'], '/Add_ads', 'App\Http\Controllers\EditAdsController@form_for_add');
Route::match(['get', 'post'], '/result_adding_ads', 'App\Http\Controllers\EditAdsController@result_for_add');

Route::match(['get', 'post'], '/Edit_ads_{id}', 'App\Http\Controllers\EditAdsController@form_for_edit');
Route::match(['get', 'post'], '/result_editing_ads_{id}', 'App\Http\Controllers\EditAdsController@result_for_edit');

Route::match(['get', 'post'], '/result_deleting_ads_{id}', 'App\Http\Controllers\EditAdsController@result_for_delete');

Route::match(['get', 'post'], '/Edit_doctor_{id}', 'App\Http\Controllers\EditDoctorsController@form_for_edit');
Route::match(['get', 'post'], '/result_editing_doctor_{id}', 'App\Http\Controllers\EditDoctorsController@result_for_edit');

Route::match(['get', 'post'], '/Add_doctor', 'App\Http\Controllers\EditDoctorsController@form_for_add');
Route::match(['get', 'post'], '/result_adding_doctor', 'App\Http\Controllers\EditDoctorsController@result_for_add');

Route::match(['get', 'post'], '/result_deleting_doctor_{id}', 'App\Http\Controllers\EditDoctorsController@result_for_delete');

Route::match(['get', 'post'], '/Edit_activity_{id}', 'App\Http\Controllers\EditActivitiesController@form_for_edit');
Route::match(['get', 'post'], '/result_editing_activity_{id}', 'App\Http\Controllers\EditActivitiesController@result_for_edit');

Route::match(['get', 'post'], '/Add_activity', 'App\Http\Controllers\EditActivitiesController@form_for_add');
Route::match(['get', 'post'], '/result_adding_activity', 'App\Http\Controllers\EditActivitiesController@result_for_add');

Route::match(['get', 'post'], '/result_deleting_activity_{id}', 'App\Http\Controllers\EditActivitiesController@result_for_delete');

Route::get('/{id}', 'App\Http\Controllers\HomeController@getStr');
