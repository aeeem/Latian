<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable=[
        'Id_SE',
        'Id_Question',
        'answer',
        ];
    //Mengambil id dari tabel Question, untuk mengisi attribute Id_Question
    
    public function Question()
    {
        return $this->belongsTo('App\Model\Question', 'Id_Question');
    }
    //Mengambil id dari tabel Student Exams, untuk mengisi attribute Id_SE
    public function StudentExams()
    {
        return $this->belongsTo('App\Model\StudentExam', 'Id_SE');
    }
}
