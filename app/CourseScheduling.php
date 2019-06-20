<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseScheduling extends Model
{
    protected $table = 'course_scheduling';

    public function course()
    {
        return $this->belongsTo('App\Course','course_id','course_id');
    }

   public function institute()
    {
        return $this->belongsTo('App\institute','institute_id','institute _id');
    }
}
