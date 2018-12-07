<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    protected $fillable=['name','Time_Limit','Id_Subject'];

    public function Subjects()
    {
        return $this->belongsTo('App\Model\Subject', 'Id_Subject');
    }


    public function Question()
    {
        return $this->hasMany('App\Model\Question', 'Id_Exam','id');
    }
}
