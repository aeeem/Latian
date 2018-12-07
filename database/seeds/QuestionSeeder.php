<?php

use Illuminate\Database\Seeder;
use App\Model\Exam;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exam=Exam::All();
        foreach ($exam as $row ) {

            $count=random_int(10,50);
            //make question based on random number
            for ($i=0; $i < $count; $i++) { 
                //generationg question one with factory
                $row->Question()->save(factory(App\Model\Question::class)->make());
            }
        }
    }
}
