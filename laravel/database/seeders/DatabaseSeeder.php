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
        $this->call(UserSeeder::class);
        // $this->call(UserFullSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(EventUserSeeder::class);
        $this->call(ProcessSeeder::class);
        $this->call(ProcessUserSeeder::class);
        $this->call(CertificateSeeder::class);
        $this->call(ComplaintSeeder::class);
    }
}
