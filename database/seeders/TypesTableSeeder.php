<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $my_types = ['Frontend', 'Backend', 'Fullstack', 'Data Analystics', 'UX/UI', 'Mobile', 'Data Science', 'Machine Learning', 'Artificial Intelligence'];
    }
}
