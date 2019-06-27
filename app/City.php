<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table ='city';

    public function user()
    {
        return($this->hasMany('App\user'));
    }

    public function institutes()
    {

        return $this->belongsToMany('App\Institute')->withPivot('branch_name');

    }



}
