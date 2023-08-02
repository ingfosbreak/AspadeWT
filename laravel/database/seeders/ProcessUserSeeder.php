<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcessUser;

class ProcessUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new ProcessUser();
        $event->user_id = 1;
        $event->process_id = 1;
        $event->save();

        $event = new ProcessUser();
        $event->user_id = 2;
        $event->process_id = 1;
        $event->status = 'approved';
        $event->save();


    }
}
