<?php

use Illuminate\Database\Seeder;
use App\Model\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            ['name'=> 'matematika'],
            ['name'=> 'PKN'],
            ['name'=> 'Something1'],
            ['name'=> 'Something2'],
            ['name'=> 'Something3'],
        );
            foreach ($data as $row) {
                Subject::create($row);
                
            }
    }
}
