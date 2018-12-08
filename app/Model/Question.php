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

    //Mengambil id dari tabel Exam, untuk mengisi attribute Id_Exam
    public function Exam()
    {
        return $this->belongsTo('App\Model\Exam', 'Id_Exam');
    }

    //relasi dengan Answer, passing id Answer untuk dijadikan attribute dalam tabel Question
    public function Answer()
    {
        return $this->hasMany('App\Model\Answer', 'Id_Question','id');
    }
}
