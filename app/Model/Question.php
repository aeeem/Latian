<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
    'Id_exam',
    'question',
    'opt_1',
    'opt_2',
    'opt_3',
    'opt_4',
    'answer',
    ];
    public function Exam()
    {
        return $this->belongsTo('App\Model\Exam', 'Id_Exam');
    }
}
