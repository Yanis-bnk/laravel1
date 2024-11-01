<?php

namespace Database\Seeders;

use App\Models\profile;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        profile::factory(200)->create();
    }
}
