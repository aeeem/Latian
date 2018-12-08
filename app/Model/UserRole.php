<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable=['name'];
    public function User()
    {
        return $this->hasMany('App\User','id_role','id');
    }
}
