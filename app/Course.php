<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function enquiry(){
    	return $this->hasMany('App\Enquiry');
    }

    public function feeMaster(){
    	return $this->hasMany('App\FeesMaster');
    }
}
