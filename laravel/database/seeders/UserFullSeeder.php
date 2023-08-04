<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserFull;

class UserFullSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userEntry = new UserFull();
        $userEntry->user_id = 1;
        $userEntry->email = "ingfosbreak@outlook.com";
        $userEntry->firstname = "Panachai";
        $userEntry->lastname = "Kotchagason";
        $userEntry->faculty = "Science";
        $userEntry->year = 3;
        $userEntry->save();

        $userEntry = new UserFull();
        $userEntry->user_id = 2;
        $userEntry->email = "toto@outlook.com";
        $userEntry->firstname = "Panachai";
        $userEntry->lastname = "Kotchagason";
        $userEntry->faculty = "Science";
        $userEntry->year = 3;
        $userEntry->save();
    }
}
