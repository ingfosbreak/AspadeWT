<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserEntry;

class UserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userEntry = new UserEntry();
        $userEntry->username = "ink";
        $userEntry->password = "inkpass";
        $userEntry->role = "admin";
        $userEntry->save();

        $userEntry = new UserEntry();
        $userEntry->username = "toto";
        $userEntry->password = "totopass";
        $userEntry->role = "user";
        $userEntry->save();

        $userEntry = new UserEntry();
        $userEntry->username = "ja";
        $userEntry->password = "japass";
        $userEntry->role = "user";
        $userEntry->save();
        
    }
}
