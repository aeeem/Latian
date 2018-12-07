<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
