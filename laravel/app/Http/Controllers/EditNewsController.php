<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblNews;
use DB;

class EditNewsController extends Controller
{
    public function form_for_edit($id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$title = "";
			$text = "";
			
			//$id_new = 4;
			$id_new = $id;
			
			$current_news = TblNews::find($id_new);
			
			$title = $current_news->news_title;
			$text = $current_news->news_text;

			return view('Edit_news', ['title' => $title, 'text' => $text, 'for_legend' => "Редактировать новость", 'for_label' => "новости", 'for_link' => "result_editing_news"])->with('id', $id);
		}
		return view('log_in');
	}
	
	public function form_for_add() {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			return view('Add_news', ['title' => "", 'text' => "", 'for_legend' => "Добавить новость", 'for_label' => "новости", 'for_link' => "result_adding_news"]);
		}
		return view('log_in');
	}
	
	public function result_for_edit(Request $request, $id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
		//$id_new = 4;
		$id_new = $id;
		
		// Получение первой модели, удовлетворяющей условиям...
		/*$current_news = TblNews::where('id_news', $id_new)->first();*/
		
		$current_news = TblNews::find($id_new);
		
		$current_news->news_title = $request->input('edit_title');
		$current_news->news_text = $request->input('edit_text');
		
		$current_news->save();
		
		
		// Работающий вариант
		/*DB::table('tblnews')
		  ->where('id_news', '=', $id_new)
		  ->update(['news_title' => $request->input('edit_title'), 'news_text' => $request->input('edit_text')]);*/
		
		
		//return view('/');
		//return view('Navi');
		return view('result_editing', ['notification_type' => "Новость", 'for_notification' => "изменена", 'for_res_link' => "Navi_edit"]);
		}
		return view('log_in');
    }
	
	public function result_for_add(Request $request) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$new_news = new TblNews();
			
			if($request->has('edit_title')){
				$new_news->news_title = $request->input('edit_title');
			}
			
			if($request->has('edit_text')){
				$new_news->news_text = $request->input('edit_text');
			}
				
			$new_news->news_status = 1;
			$new_news->news_date_of_creation = date('Y-m-d H:i:s');
			
			$new_news->save();

			//return view('/');
			//return view('Navi');
			return view('result_editing', ['notification_type' => "Новость", 'for_notification' => "добавлена", 'for_res_link' => "Navi_edit"]);
		}
		return view('log_in');
    }
	
	public function result_for_delete(Request $request, $id) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
		//$id_new = 5;
		$id_new = $id;
		
		$current_news = TblNews::find($id_new);
		
		$current_news->news_status = 0;
		
		$current_news->save();
		
		/*DB::table('tblnews')
		  ->where('id_news', '=', $id_new)
		  ->update(['news_status' => 0]);*/


		//return view('/');
		//return view('Navi');
		return view('result_editing', ['notification_type' => "Новость", 'for_notification' => "удалена", 'for_res_link' => "Navi_edit"]);
		}
		return view('log_in');
    }
}
