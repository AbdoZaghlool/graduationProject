<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificationScheduling extends Model
{
    protected $table = 'certification scheduling';

    public function certification()
    {
        return $this->belongsTo('App\certification','cer_id','cer_id');
    }
}
