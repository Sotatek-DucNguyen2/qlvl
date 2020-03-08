<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topic";

    public function job(){
    	return $this->belongsTo('App\Job','id_job','id');
    }

    public function company(){
    	return $this->belongsTo('App\Company','id_company','id');
    }

    public function student(){
    	return $this->belongsTo('App\Student','id_student','id');
    }
     public $timestamps = true;

}
