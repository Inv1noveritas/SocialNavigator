<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblVol;

class VolController extends Controller
{
	
    public function getVol() {
		//$view = View::make('Navi');;
		$contentVols = new TblVol;
		$contentVols = $contentVols->all();
		
		return view('Navi2', ['vols' => $contentVols]);
	}
}

