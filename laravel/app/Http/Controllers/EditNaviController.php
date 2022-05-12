<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblContent;
use App\Models\TblNews;
use App\Models\TblAds;

class EditNaviController extends Controller
{
     public function getContent(Request $request) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			//$view = View::make('Navi');;
			$contentNews = new TblNews;
			$contentNews = $contentNews->all();
			$contentAds = new TblAds;
			$contentAds = $contentAds->all();

			return view('Navi_edit', ['news' => $contentNews, 'ads' => $contentAds]);
		}
		return view('log_in');
	}
	
	public function getStr(Request $request) {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$content = TblContent::where('id', $request->id)->first();
			if (!$content) {
				return abort(404);
			}
			return view('href_edit', ['content' => $content, 'id' => $request->id]);
		}
		return view('log_in');
	}
}
