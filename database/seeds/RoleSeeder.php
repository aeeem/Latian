<?php

use Illuminate\Database\Seeder;
use App\Model\UserRole;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            ['name'=>'admin'],
            ['name'=>'guru'],
            ['name'=>'murid'],
            ['name'=>'kepsek'],
            ['name'=>'Tata Usaha']
            );
             
            foreach ($data as $role ) {
                UserRole::create($role);
            }
            
        
        
        
    }
}
