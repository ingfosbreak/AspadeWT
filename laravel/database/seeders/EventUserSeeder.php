<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventUser;

class EventUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new EventUser();
        $event->user_id = 1;
        $event->event_id = 1;
        $event->event_role = "header";
        $event->save();

        $event = new EventUser();
        $event->user_id = 2;
        $event->event_id = 1;
        $event->event_role = "staff";
        $event->save();
    }
}
