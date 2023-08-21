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

        for ($x = 1; $x <= 11; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = $x;
        $event->event_role = "header";
        if($event->user_id != $event->event_id){
            $event->save();
        }

    }
    for ($x = 2; $x <= 60; $x+=1) {
        
        $event = new EventUser();
        $event->user_id = $x;
        $event->event_id = 1;
        $event->event_role = "partisipant";
        $event->save();
    }
}
}