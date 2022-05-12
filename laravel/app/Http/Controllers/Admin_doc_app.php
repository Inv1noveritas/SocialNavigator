<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblActivities;
use App\Models\TblVolunteersApplications;
use App\Models\TblDoctors;
use App\Models\TblStudentsApplications;

class Admin_doc_app extends Controller
{
    public function getVolAct_admin() {
		
		$name = $_COOKIE["password"];
		
		if ($name == 'check')
		{
			$contentVolAct = new TblActivities;
			$contentVolAct = $contentVolAct->all();
			
			
			$contentVolAppl = new TblVolunteersApplications;
			$contentVolAppl = $contentVolAppl->all();
			
			$contentDoctAct = new TblDoctors;
			$contentDoctAct = $contentDoctAct->all();
			
			
			$contentDoctAppl = new TblStudentsApplications;
			$contentDoctAppl = $contentDoctAppl->all();
			
			return view('table_forAdmin_doc', ['activity' => $contentVolAct, 'appl'=>$contentVolAppl, 'doctors_meet'=>$contentDoctAct, 'doct_appl'=>$contentDoctAppl]);
		}
		return view('log_in');
	}
}
