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
        $userEntry->password = "inkpass";
        $userEntry->name = "Panachai";
        $userEntry->image_path = "inkimg";
        $userEntry->save();

        $userEntry = new UserFull();
        $userEntry->user_entry_id = 2;
        $userEntry->password = "totopass";
        $userEntry->name = "toto";
        $userEntry->image_path = "totoimg";
        $userEntry->save();

        $userEntry = new UserFull();
        $userEntry->user_entry_id = 3;
        $userEntry->password = "japass";
        $userEntry->name = "ja";
        $userEntry->image_path = "jaimg";
        $userEntry->save();
    }
}
