<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userEntry = new User();
        $userEntry->username = "ink";
        $userEntry->email = "ingfosbreak@outlook.com";
        $userEntry->password = "inkpass";
        $userEntry->role = "admin";
        $userEntry->save();

        $userEntry = new User();
        $userEntry->username = "toto";
        $userEntry->email = "toto@outlook.com";
        $userEntry->password = "totopass";
        $userEntry->role = "user";
        $userEntry->save();

        
        
    }
}
