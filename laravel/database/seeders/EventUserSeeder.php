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
    for ($x = 12; $x <= 60; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 1;
        $event->event_role = "participant";
        $event->save();
    }
    for ($x = 61; $x <= 80; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 1;
        $event->event_role = "staff";
        $event->save();
    }


    for ($x = 12; $x <= 70; $x+=1) {
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 2;
        $event->event_role = "participant";
        $event->save();
    }
    for ($x = 71; $x <= 84; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 2;
        $event->event_role = "staff";
        $event->save();
    }

    for ($x = 12; $x <= 50; $x+=1) {
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 3;
        $event->event_role = "participant";
        $event->save();
    }
    for ($x = 71; $x <= 99; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 3;
        $event->event_role = "staff";
        $event->save();
    }

    for ($x = 12; $x <= 79; $x+=1) {
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 4;
        $event->event_role = "participant";
        $event->save();
    }
    for ($x = 80; $x <= 89; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 4;
        $event->event_role = "staff";
        $event->save();
    }

    for ($x = 12; $x <= 40; $x+=1) {
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 4;
        $event->event_role = "participant";
        $event->save();
    }
    for ($x = 41; $x <= 48; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 4;
        $event->event_role = "staff";
        $event->save();
    }
    for ($x = 1; $x <= 11; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = $x;
        $event->event_role = "header";
        $event->save();

    }
}
}