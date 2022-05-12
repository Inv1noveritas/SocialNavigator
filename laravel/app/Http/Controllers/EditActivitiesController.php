<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblVol;
use DB;

class EditActivitiesController extends Controller
{
    public function form_for_edit($id) {		
		$activity_description = null;
		$activity_time = null;
		$activity_location = null;
		$necessary_help = null;
		$number_of_vacansion = null;
		
		$id_activity = $id;
		
		$current_activity = TblVol::find($id_activity);
		
		$activity_description = $current_activity->activity_description;
		$activity_time = $current_activity->activity_time;
		$activity_location = $current_activity->activity_location;
		$necessary_help = $current_activity->necessary_help;
		$number_of_vacansion = $current_activity->number_of_vacansion;

        return view('Edit_activity', ['activity_description' => $activity_description, 'activity_time' => $activity_time, 'activity_location' => $activity_location, 'necessary_help' => $necessary_help, 'number_of_vacansion' => $number_of_vacansion, 'for_link' => "result_editing_activity"])->with('id', $id);
    }
	
	public function form_for_add() {
        return view('Add_activity', ['for_link' => "result_adding_activity"]);
    }
	
	public function result_for_edit(Request $request, $id) {
		$id_activity = $id;
		
		$current_activity = TblVol::find($id_activity);
		
		$current_activity->activity_description = $request->input('activity_description');
		$current_activity->activity_time = $request->input('activity_time');
		$current_activity->activity_location = $request->input('activity_location');
		$current_activity->necessary_help = $request->input('necessary_help');
		$current_activity->number_of_vacansion = $request->input('number_of_vacansion');
		
		$current_activity->save();
		
		return view('result_editing', ['notification_type' => "Информация о мероприятии", 'for_notification' => "изменена", 'for_res_link' => "Navi2_edit"]);
    }
	
	public function result_for_add(Request $request) {
		$new_activity = new TblVol();
		
		if($request->has('activity_description')){
			$new_activity->activity_description = $request->input('activity_description');
        }
		
		if($request->has('activity_time')){
			$new_activity->activity_time = $request->input('activity_time');
        }
		
		if($request->has('activity_location')){
			$new_activity->activity_location = $request->input('activity_location');
        }
		
		if($request->has('necessary_help')){
			$new_activity->necessary_help = $request->input('necessary_help');
        }
		
		if($request->has('number_of_vacansion')){
			$new_activity->number_of_vacansion = $request->input('number_of_vacansion');
        }
		
		$new_activity->activity_status = 1;
		
		$new_activity->save();

		return view('result_editing', ['notification_type' => "Мероприятие", 'for_notification' => "добавлено", 'for_res_link' => "Navi2_edit"]);
    }
	
	public function result_for_delete(Request $request, $id) {
		$id_activity = $id;
		
		$current_activity = TblVol::find($id_activity);
		
		$current_activity->activity_status = 0;
		
		$current_activity->save();
		
		return view('result_editing', ['notification_type' => "Мероприятие", 'for_notification' => "удалено", 'for_res_link' => "Navi2_edit"]);
    }
}
