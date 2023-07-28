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
        $event->member = 20;
        $event->budget = 5000;
        $event->save();

        $event = new Event();
        $event->name = "Walking";
        $event->member = 20;
        $event->budget = 10000;
        $event->save();
    }
}
