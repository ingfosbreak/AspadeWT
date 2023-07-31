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
        $userEntry->user_entry_id = 1;
        $userEntry->email = "totomail";
        $userEntry->firstname = "Panachai";
        $userEntry->lastname = "Kotchagason";
        $userEntry->faculty = "Science";
        $userEntry->year = 3;
        $userEntry->image_path = "inkimg";
        $userEntry->save();

        $userEntry = new UserFull();
        $userEntry->user_entry_id = 2;
        $userEntry->email = "totomail";
        $userEntry->firstname = "Panachai";
        $userEntry->lastname = "Kotchagason";
        $userEntry->faculty = "Science";
        $userEntry->year = 3;
        $userEntry->image_path = "totoimg";
        $userEntry->save();

        $userEntry = new UserFull();
        $userEntry->user_entry_id = 3;
        $userEntry->email = "totomail";
        $userEntry->firstname = "Panachai";
        $userEntry->lastname = "Kotchagason";
        $userEntry->faculty = "Science";
        $userEntry->year = 3;
        $userEntry->image_path = "jaimg";
        $userEntry->save();
    }
}
