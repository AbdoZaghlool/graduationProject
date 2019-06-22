<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class institute extends Authenticatable
{
    use Notifiable;

    protected $table = 'institute';

    protected $fillable = [
        "name", "email", "password"
    ];

    protected $hidden = [
        "password", "remember_token"
    ];

}
