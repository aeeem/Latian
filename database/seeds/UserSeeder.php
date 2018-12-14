<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\UserRole;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=UserRole::all();
        
        foreach ($role as $row) {
            $row->User()->save(factory(App\User::class)->make());
        }
    }
}
