<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Certificate();
        $event->user_id = 1;
        $event->event_id = 1;
        $event->name = "your mom";
        $event->description = "yes you good";
        $event->save();

    }
}
