<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->name = "Running";
        $event->num_member = 20;
        $event->budget = 5000;
        $event->date = "2/2/2222";
        $event->location = "KU";
        $event->description = "มาวิ่งกันเถอะ";
        $event->save();


        $event = new Event();
        $event->name = "Walking";
        $event->num_member = 20;
        $event->budget = 5000;
        $event->date = "2/2/2222";
        $event->location = "KU";
        $event->description = "มาเดินกันเถอะ";
        $event->save();
    }
}
