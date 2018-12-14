<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentExam extends Model
{
    protected $fillable=[
        'Id_User',
        'Id_Exam',
        'Score',
    ];


    public function Answer()
    {
        return $this->hasMany('App\Model\Answer', 'Id_SE');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'Id_user');
    }

    public function Exam()
    {
        return $this->belongsTo('App\Model\Exam', 'Id_Exam');
    }
}
