<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

 protected $fillable=['id','name'];
 public function Exam()
 {
     return $this->hasMany('App\Model\Exam','Id_Subject');
 }
}
