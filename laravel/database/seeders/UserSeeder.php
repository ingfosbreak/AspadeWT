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
        $userEntry->name = "ink";
        $userEntry->email = "ingfosbreak@outlook.com";
        $userEntry->password = "191245";
        $userEntry->save();

        
        
    }
}
