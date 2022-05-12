<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblDoctors;
use DB;

class EditDoctorsController extends Controller
{
    public function form_for_edit($id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{		
			$doctor_name = null;
			$doctor_speciality = null;
			$doctor_job = null;
			$doctor_tel_number = null;
			$doctor_login = null;
			
			$id_doctor = $id;
			
			$current_doctor = TblDoctors::find($id_doctor);
			
			$doctor_name = $current_doctor->doctor_name;
			$doctor_speciality = $current_doctor->doctor_speciality;
			$doctor_job = $current_doctor->doctor_job;
			$doctor_tel_number = $current_doctor->doctor_phone_number;
			$doctor_login = $current_doctor->doctor_email;

			return view('Edit_doctor', ['doctor_name' => $doctor_name, 'doctor_speciality' => $doctor_speciality, 'doctor_job' => $doctor_job, 'doctor_tel_number' => $doctor_tel_number, 'doctor_login' => $doctor_login, 'for_link' => "result_editing_doctor"])->with('id', $id);
		}
		return view('log_in');
	}
	
	public function form_for_add() {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{	
			return view('Add_doctor', ['for_link' => "result_adding_doctor"]);
		}
		return view('log_in');
    }
	
	public function result_for_edit(Request $request, $id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$id_doctor = $id;
			
			$current_doctor = TblDoctors::find($id_doctor);
			
			$current_doctor->doctor_name = $request->input('doctor_name');
			$current_doctor->doctor_speciality = $request->input('doctor_speciality');
			$current_doctor->doctor_job = $request->input('doctor_job');
			$current_doctor->doctor_phone_number = $request->input('doctor_tel_number');
			$current_doctor->doctor_email = $request->input('doctor_login');
			
			$current_doctor->save();
			
			return view('result_editing', ['notification_type' => "Информация о враче", 'for_notification' => "изменена", 'for_res_link' => "Navi1_edit"]);
		}
		return view('log_in');
    }
	
	public function result_for_add(Request $request) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
		
			$new_doctor = new TblDoctors();
			
			if($request->has('doctor_name')){
				$new_doctor->doctor_name = $request->input('doctor_name');
			}
			
			if($request->has('doctor_speciality')){
				$new_doctor->doctor_speciality = $request->input('doctor_speciality');
			}
			
			if($request->has('doctor_job')){
				$new_doctor->doctor_job = $request->input('doctor_job');
			}
			
			if($request->has('doctor_tel_number')){
				$new_doctor->doctor_phone_number = $request->input('doctor_tel_number');
			}
			
			if($request->has('doctor_login')){
				$new_doctor->doctor_email = $request->input('doctor_login');
			}
			
			$new_doctor->doctor_status = 1;
			
			$new_doctor->save();

			return view('result_editing', ['notification_type' => "Врач", 'for_notification' => "добавлен", 'for_res_link' => "Navi1_edit"]);
		}
		return view('log_in');
    }
	
	public function result_for_delete(Request $request, $id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$id_doctor = $id;
			
			$current_doctor = TblDoctors::find($id_doctor);
			
			$current_doctor->doctor_status = 0;
			
			$current_doctor->save();
			
			return view('result_editing', ['notification_type' => "Врач", 'for_notification' => "удален", 'for_res_link' => "Navi1_edit"]);
		}
		return view('log_in');
    }
}
