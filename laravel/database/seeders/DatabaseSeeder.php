<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserEntrySeeder::class);
        $this->call(UserFullSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(EventUserEntrySeeder::class);
        // $this->call(ProcessSeeder::class);
        // $this->call(ProcessUserEntrySeeder::class);
        // $this->call(InformSeeder::class);
        // $this->call(CertificateSeeder::class);
    }
}
