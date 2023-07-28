<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventUserEntry;

class EventUserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new EventUserEntry();
        $event->user_entry_id = 1;
        $event->event_id = 1;
        $event->event_role = "staff";
        $event->save();

        $event = new EventUserEntry();
        $event->user_entry_id = 1;
        $event->event_id = 2;
        $event->event_role = "staff";
        $event->save();
    }
}
