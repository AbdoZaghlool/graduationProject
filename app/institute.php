<?php

namespace App;

use App\Notifications\InstituteResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Institute extends Authenticatable
{
    use Notifiable;
    protected $table = 'institutes';


      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name', 'email', 'password',
      ];
      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [
          'password', 'remember_token',
      ];
      /**
       * Send the password reset notification.
       *
       * @param  string  $token
       * @return void
       */
      public function sendPasswordResetNotification($token)
      {
          $this->notify(new InstituteResetPassword($token));
      }


    public function courses()
    {
        return $this->belongsToMany('App\Course')->withPivot('co_sc_sDate', 'co_sc_price', 'duration', 'trainer');
    }
    public function cities()
    {

        return $this->belongsToMany('App\City')->withPivot('branch_name');

    }
}
