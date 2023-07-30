<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcessUserEntry;

class ProcessUserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new ProcessUserEntry();
        $event->user_entry_id = 1;
        $event->process_id = 1;
        $event->save();

        $event = new ProcessUserEntry();
        $event->user_entry_id = 2;
        $event->process_id = 1;
        $event->status = 'approved';
        $event->save();


    }
}
