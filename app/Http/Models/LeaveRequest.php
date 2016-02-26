<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    protected $table = 'leaverequests';

 //    public function getStatusAttribute($value) {
 //    	return ($value) ? "Approved" : "Pending";
	// }
}

