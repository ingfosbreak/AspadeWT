<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Process;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Process();
        $event->event_id = 1;
        $event->name = "warm-up";
        $event->status = "todo";
        $event->save();
        
        $event = new Process();
        $event->event_id = 1;        
        $event->name = "run";
        $event->save();
    }
}
