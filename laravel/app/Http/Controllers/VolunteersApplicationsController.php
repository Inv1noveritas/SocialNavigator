<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblVolunteersApplications;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class VolunteersApplicationsController extends Controller
{	
	/*public function form() {
        return view('Form_activities');
    }*/
	
	public function form($ID_activity) {
        return view('Form_activities')->with('id', $ID_activity);
    }

    public function result(Request $request, $id) {
		$application = new TblVolunteersApplications();
		
		$return_array = [
			'activity' => 'Не указано',
			'activity_time' => 'Не указано',
			'activity_location' => 'Не указано',
			
			'name' => 'Не указано',
			'institute' => 'Не указано',
			'course' => 'Не указано',
			'group' => 'Не указано',
			'phone_number' => 'Не указано',
			'email' => 'Не указано'			
		];
				
		//$activity = 1;
		$activity = $id;;
		$application->id_activities = $activity;
		
		if($request->has('user_name')){
            $name = $request->input('user_name');  // в переменной $name содержатся данные запроса
			$application->volonteer_name = $name;
			$return_array['name'] = $name;
        }
		
		if($request->has('institute')){
            $institute = $request->input('institute');
			$application->volonteer_institute = $institute;
			$return_array['institute'] = $institute;
        }
		if ($return_array['institute'] == '') {
			$return_array['institute'] = 'Не указано';
		}
		
		if($request->has('user_course')){
            $course = $request->input('user_course');
			$application->volonteer_cours = $course;
			$return_array['course'] = $course;
        }
		if ($return_array['course'] == '') {
			$return_array['course'] = 'Не указано';
		}
		
		if($request->has('user_group')){
            $group = $request->input('user_group');
			$application->volonteer_group = $group;
			$return_array['group'] = $group;
        }
		if ($return_array['group'] == '') {
			$return_array['group'] = 'Не указано';
		}
		
		if($request->has('user_tel_number')){
            $phone_number = $request->input('user_tel_number');
			$application->volonteer_phone_number = $phone_number;
			$return_array['phone_number'] = $phone_number;
        }
		if ($return_array['phone_number'] == '') {
			$return_array['phone_number'] = 'Не указано';
		}
		
		if($request->has('user_login')){
            $email = $request->input('user_login');
			$application->volonteer_email = $email;
			$return_array['email'] = $email;
        }
	
		$activity_description = DB::table('tblactivities')->where('id', $activity)->value('activity_description');
		$return_array['activity'] = $activity_description;
		
		$activity_time = DB::table('tblactivities')->where('id', $activity)->value('activity_time');
		$return_array['activity_time'] = $activity_time;
		$application->activity_time = $activity_time;

		$activity_location = DB::table('tblactivities')->where('id', $activity)->value('activity_location');
		$return_array['activity_location'] = $activity_location;
		
		$number_of_vacansion = DB::table('tblactivities')->where('id', $activity)->value('number_of_vacansion');
		DB::update('update tblactivities set number_of_vacansion = ? where id = ?',[$number_of_vacansion - 1, $activity]);
		
		$application->save();
		
		Mail::to($email)->send(new WelcomeMail($return_array));
		
		return view('result_volunteer_form', $return_array);
    }
}
