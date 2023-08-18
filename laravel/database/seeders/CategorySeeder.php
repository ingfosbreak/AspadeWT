<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->name = 'outdoor';
        $category->save();
        
        $category = new Category();
        $category->name = 'indoor';
        $category->save();

        $category = new Category();
        $category->name = 'sport';
        $category->save();

        $category = new Category();
        $category->name = 'concert';
        $category->save();

        $category = new Category();
        $category->name = 'academic';
        $category->save();

    }
}
