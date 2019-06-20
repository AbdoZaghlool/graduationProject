<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diplomaScheduling extends Model
{
    protected $table = 'diploma scheduling';

    public function diploma()
    {
        return $this->belongsTo('App\diploma','d_id','d_id');
    }

    public function institute()
    {
        return $this->belongsTo('App\institute','institute_id','institute _id');
    }
}
