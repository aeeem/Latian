<?php

use Illuminate\Database\Seeder;
use App\Model\Subject;
use App\Model\Exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Subject::class, 10)->create()->each(function ($subject) {
            $subject->Exams()->save(factory(App\Model\Exam::class)->make());
        });
    }
}
