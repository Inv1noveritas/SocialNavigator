<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblStudentsApplications;
use DB;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail2;
use App\Mail\WelcomeMail3;

class StudentsApplicationsController extends Controller
{	
	// private $my_id;

	/* public function form() {
        return view('Form_doctor');
    } */
	
	public function form($ID_doctor) {
		// $this->my_id = $ID_doctor;
        return view('Form_doctor')->with('id', $ID_doctor);
    }

    public function result(Request $request, $id) {
		//$ID_doctor= $this->my_id;	// новое
		
		$application = new TblStudentsApplications();
		
		$return_array = [
			'doctor' => 'Не указано',
			'name' => 'Не указано',
			'institute' => 'Не указано',
			'course' => 'Не указано',
			'group' => 'Не указано',
			'phone_number' => 'Не указано',
			'email' => 'Не указано',
			'date' => 'Не указано',
			'address'=> 'Не указано'
		];
		
		//$doctor = $ID_doctor;	// новое
		$doctor = $id;
		// $doctor = 1;
		$application->id_doctor = $doctor;
		//$return_array['doctor'] = $doctor;
				
		if($request->has('user_name')){
            $name = $request->input('user_name');  // в переменной $name содержатся данные запроса
			$application->student_name = $name;
			$return_array['name'] = $name;
        }
		
		if($request->has('institute')){
            $institute = $request->input('institute');
			$application->institute = $institute;
			$return_array['institute'] = $institute;
        }
		if ($return_array['institute'] == '') {
			$return_array['institute'] = 'Не указано';
		}
		
		if($request->has('user_course')){
            $course = $request->input('user_course');
			$application->course = $course;
			$return_array['course'] = $course;
        }
		if ($return_array['course'] == '') {
			$return_array['course'] = 'Не указано';
		}
		
		if($request->has('user_group')){
            $group = $request->input('user_group');
			$application->group = $group;
			$return_array['group'] = $group;
        }
		if ($return_array['group'] == '') {
			$return_array['group'] = 'Не указано';
		}
		
		if($request->has('user_tel_number')){
            $phone_number = $request->input('user_tel_number');
			$application->student_phone_number = $phone_number;
			$return_array['phone_number'] = $phone_number;
        }
		if ($return_array['phone_number'] == '') {
			$return_array['phone_number'] = 'Не указано';
		}		
				
		if($request->has('user_login')){
            $email = $request->input('user_login');
			$application->student_email = $email;
			$return_array['email'] = $email;
        }
		
		if($request->has('user_date_time')){
            $date = $request->input('user_date_time');
			$application->visit_time = $date;
			$return_array['date'] = $date;
        }
		
		$doctor_name = DB::table('tbldoctors')->where('id', $doctor)->value('doctor_name');
		$return_array['doctor'] = $doctor_name;
		
		$address = DB::table('tbldoctors')->where('id', $doctor)->value('doctor_job');
		$return_array['address'] = $address;
		
		$application->save();
		
		Mail::to($email)->send(new WelcomeMail2($return_array));
		Mail::to($email)->send(new WelcomeMail3($return_array));
		
		return view('result_doctor_form', $return_array);
    }
}
