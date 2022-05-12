<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblContent;
 
class UpdateController extends Controller {

	public function edit(Request $request, $id) 
	{
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
		
			$user = TblContent::where('id', '=', $request->id)->first();
			if (!($user === null))
			{
				$content = TblContent::where('id', $request->id)->first();
				if ($request->text != "")
				{
					$content->content=$request->text;
					$content->save();
					return view('href2', ['id' => $request->id]);
				} else {
					$content->content="Текст не был найден";
					$content->save();
					return view('href2', ['id' => $request->id]);
				}
			}
			return view('Editor', ['content' => "Такого id не существует"]);
		}
		return view('log_in');
	}
}
