<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{	
	public function getStr(Request $request) {
		return view('log_in');
	}
}
