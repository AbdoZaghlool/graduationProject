<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $table = 'institute';

    public function courses()
    {
        return $this->belongsToMany('App\Course')->withPivot('co_sc_sDate', 'co_sc_price', 'duration', 'trainer');
    }
    public function cities()
    {

        return $this->belongsToMany('App\City')->withPivot('branch_name');

    }
}
