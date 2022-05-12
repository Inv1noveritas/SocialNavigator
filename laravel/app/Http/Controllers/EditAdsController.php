<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblAds;
use DB;

class EditAdsController extends Controller
{
    public function form_for_edit($id) {
		$title = "";
		$text = "";
		
		//$id_ad = 3;		
		$id_ad = $id;
		
		$current_ad = TblAds::find($id_ad);
		
		$title = $current_ad->ad_title;
		$text = $current_ad->ad_text;

        return view('Edit_news', ['title' => $title, 'text' => $text, 'for_legend' => "Редактировать объявление", 'for_label' => "объявления", 'for_link' => "result_editing_ads"])->with('id', $id);
        /*return view('Edit_news', ['title' => $title, 'text' => $text, 'for_legend' => "Редактировать объявление", 'for_label' => "объявления", 'for_link' => "#result_confirmation"]);*/
    }
	
	public function form_for_add() {
        return view('Add_news', ['title' => "", 'text' => "", 'for_legend' => "Добавить объявление", 'for_label' => "объявления", 'for_link' => "result_adding_ads"]);
    }
	
	public function result_for_edit(Request $request, $id) {
		//$id_ad = 3;	
		$id_ad = $id;		
		
		$current_ad = TblAds::find($id_ad);
		
		$current_ad->ad_title = $request->input('edit_title');
		$current_ad->ad_text = $request->input('edit_text');
		
		$current_ad->save();
		
		return view('result_editing', ['notification_type' => "Объявление", 'for_notification' => "изменено", 'for_res_link' => "Navi_edit"]);
    }
	
	public function result_for_add(Request $request) {
		$new_ad = new TblAds();
		
		if($request->has('edit_title')){
			$new_ad->ad_title = $request->input('edit_title');
        }
		
		if($request->has('edit_text')){
			$new_ad->ad_text = $request->input('edit_text');
        }
			
		$new_ad->ad_status = 1;
		
		$new_ad->save();

		return view('result_editing', ['notification_type' => "Объявление", 'for_notification' => "добавлено", 'for_res_link' => "Navi_edit"]);
    }
	
	public function result_for_delete(Request $request, $id) {
		//$id_ad = 4;
		$id_ad = $id;
		
		$current_ad = TblAds::find($id_ad);
		
		$current_ad->ad_status = 0;
		
		$current_ad->save();

		return view('result_editing', ['notification_type' => "Объявление", 'for_notification' => "удалено", 'for_res_link' => "Navi_edit"]);
    }
}
