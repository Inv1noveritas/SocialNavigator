<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblDoctors;
use App\Models\TblVol;

class EditNavi1Controller extends Controller
{
    public function getDoctor() {
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			//$view = View::make('Navi');;
			$contentDoctors = new TblDoctors;
			$contentDoctors = $contentDoctors->all();
			
			return view('Navi1_edit', ['doctor' => $contentDoctors]);
		}
		return view('log_in');
	}
	
	public function getVol() {
		//$view = View::make('Navi');;
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$contentVols = new TblVol;
			$contentVols = $contentVols->all();
			
			return view('Navi2_edit', ['vols' => $contentVols]);
		}
		return view('log_in');
	}
}
