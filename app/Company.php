<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "company";

    public function topic(){
    	return $this->hasMany('App\Topic','id','id_company');
    }

    public function job(){
    	return $this->hasMany('App\Job','id','id_company');
    }

    protected $primaryKey = 'id';
    protected $fillable = [

        'name_company',
        'phone_company',
        'email_company',
        'url_company',
        'address_company',
        'image_company',
    ];
}
