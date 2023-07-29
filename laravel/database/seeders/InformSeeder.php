<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inform;

class InformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inform = new Inform();
        $inform->user_entry_id = 1;
        $inform->name = "test1";
        $inform->description = "assaa";
        $inform->type = "request";
        $inform->save();

        $inform = new Inform();
        $inform->user_entry_id = 1;
        $inform->name = "test2";
        $inform->description = "assaa";
        $inform->type = "report";
        $inform->save();
      
    }
}
