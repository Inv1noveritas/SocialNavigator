<?php

namespace App\Http\Controllers;

use App\Models\TblAdmins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Log_inController extends Controller
{
    public function getStr(Request $request) {
		return view('log_in');
	}
	
	public function quit(Request $request)
	{
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			setcookie("password", "no_check");

			return view('quit');
		}
		return view('log_in');
	}
	
	public function result(Request $request) {
		setcookie("password", "no_check");
		$return_array = [
			'login' => 'Не указано',
			'password' => 'Не указано',
			'name' => 'Не указано'
		];
		
		$return_array['login'] = $request->input('admin_login');
		$return_array['password'] = $request->input('admin_password');
		
		$admin = new TblAdmins;
		$i_admin = $admin->all();
		
		foreach ($i_admin as $i)
		{
			if ($return_array['login'] == $i->admin_login && Hash::check($return_array['password'], $i->admin_password))
			{
				//Cookie::put('password', 'check', 60);
				setcookie("password", "check", time() + 3600);
				$return_array['name'] = $i->admin_name;
				return view('result_admins', $return_array);//->withCookie(cookie('password', 'check'));
			}
		}
		
		return view('window'); 
	}
	
	public function weit(Request $request) {
		return view('weit');
	}
	
	public function weit2(Request $request) {
		$admin = new TblAdmins;
		
		$q = [
			'login' => 'Не указано',
			'password' => 'Не указано',
			'ok' => 'Упс, что-то пошло не так'
		];
		
		if ($request->input('admin_login') != '')
		{
			$q['login'] = $request->input('admin_login');
		}
		
		if ($request->input('admin_password') != '')
		{
			$q['password'] = $request->input('admin_password');
		}
		
		if ($q['login'] != 'Не указано' && $q['password'] != 'Не указано')
		{
			$admin->admin_login = $q['login'];
			$admin->admin_password = Hash::make($q['password']);
			$admin->admin_name = $q['login'];
			$admin->save();
			$q['ok'] = 'Все хорошо, теперь вы можете войти';
		}
		
		return view('weit_result', $q); 
	}
	
}
