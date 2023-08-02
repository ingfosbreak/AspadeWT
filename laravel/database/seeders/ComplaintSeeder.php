<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Complaint;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inform = new Complaint();
        $inform->user_id = 1;
        $inform->event_id = 1;
        $inform->name = "delete pls";
        $inform->description = "assaa";
        $inform->save();
    }
}
