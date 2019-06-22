<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class institute extends Authenticatable
{
    use Notifiable;

    protected $table = 'institute';
    public $timestamps = false;

    protected $fillable = [
        "name", "email", "password", "brief", "phone", "email", "website", "state"
    ];

    protected $hidden = [
        "password", "remember_token"
    ];

}
