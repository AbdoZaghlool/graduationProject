<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institute;

class Course extends Model
{
    protected $table = 'course';


    public function institutes()
    {
       return $this->belongsToMany('App\Institute')/*->withPivot('co_sc_sDate','co_sc_price','duration','price')*/;

    }






}
