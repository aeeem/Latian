<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    protected $fillable=['name','Time_Limit','Id_Subject'];

    //Mengambil id dari tabel Subject, untuk mengisi attribute Id_Subject
    public function Subjects()
    {
        return $this->belongsTo('App\Model\Subject', 'Id_Subject');
    }

    //relasi dengan Question, passing id exam untuk dijadikan attribute dalam tabel Question

    public function Question()
    {
        return $this->hasMany('App\Model\Question', 'Id_Exam','id');
    }

    //relasi dengan Student Exam, passing id exam untuk dijadikan attribute dalam tabel Student Exam
    public function StudentExam()
    {
        return $this->hasMany('App\Model\StudentExam', 'Id_Exam', 'id');
    }
}
