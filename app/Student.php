<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
  
    public $timestamps = false;

    public function topic(){
        return $this->hasMany('App\Topic','id','id_student');
    }


    protected $primaryKey = "id";

    protected $fillable = [
        'name_student',
        'image_student',
        'career_student',
        'jobtype_student',
    ];

}
