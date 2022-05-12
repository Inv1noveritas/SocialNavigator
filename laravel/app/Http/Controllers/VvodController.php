<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblContent;
use App\Models\TblNews;
use App\Models\TblAds;

class VvodController extends Controller
{
	public function form_for_edit(Request $request) 
	{
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$user = TblContent::where('id', '=', $request->id)->first();
			if (!($user === null))
			{
				$content = TblContent::where('id', $request->id)->first();
				return view('Editor', ['content' => $content]);
			}
			$contentNews = new TblNews;
			$contentNews = $contentNews->all();
			$contentAds = new TblAds;
			$contentAds = $contentAds->all();

			return view('Navi', ['news' => $contentNews, 'ads' => $contentAds]);
		}
		return view('log_in');
	}
}