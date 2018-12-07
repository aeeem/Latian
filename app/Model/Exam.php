<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    protected $fillable=['name','Time_Limit','id','Id_Subject'];
    public function Subject()
    {
        return $this->belongsTo('App\Model\Subject', 'Id_Subject');
    }


    public function Question()
    {
        return $this->belongsTo('App\Model\Subject', 'Id_Subject');
    }
}
