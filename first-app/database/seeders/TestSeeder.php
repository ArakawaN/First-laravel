<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tests')->insert([

            [
                'text' => 'nas',
                'created_at' => Now()
            ],
            [
                'text' => 'peep',
                'created_at' => Now()
            ]

        ]);
    }
}
