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
        $subjects=Subject::all();
        $data=[
            ['name'=> 'harian','Time_Limit'=> '100'],
            ['name'=> 'bulananan','Time_Limit'=> '100'],
            ['name'=> 'tahunan','Time_Limit'=> '100'],
            ['name'=> 'kabisatan','Time_Limit'=> '100'],
        ];
            foreach ($subjects as $row) {
                $row->Exam()->create($data);
                
            }
    }
}
