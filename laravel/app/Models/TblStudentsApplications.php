<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblStudentsApplications extends Model
{
	
	protected $table = 'tblstudentsapplications';
	protected $dates = ['visit_time'];
    //use HasFactory;
}
