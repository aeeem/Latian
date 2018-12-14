<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Exam;

class StudentExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $users=User::all();
        $exams=Exam::all();
        

        $users->each(function ($user) use ($exams){
            $user->StudentExam()->attach($exams,factory(App\Model\StudentExam::class)->make())->pluck('id')->toArray();
        });


        
    }
}
