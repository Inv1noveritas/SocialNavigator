<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblVolunteersApplications extends Model
{
	
	protected $table = 'tblvolunteersapplications';
	protected $dates = ['activity_time'];
    //use HasFactory;
}
