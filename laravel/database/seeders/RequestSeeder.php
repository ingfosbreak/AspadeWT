<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Request;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inform = new Request();
        $inform->user_id = 1;
        $inform->name = "make pls";
        $inform->num_member = 20;
        $inform->budget = 20000;
        $inform->date = "today";
        $inform->location = "KU";
        $inform->description = "assaa";
        $inform->save();
    }
}
