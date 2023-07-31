<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('shops')->insert(
            [
                [
                    'name' => 'メロンパン', 'area_id' => 1
                ],
                [
                    'name' => 'クロワッサン', 'area_id' => 2
                ],
                [
                    'name' => '高級食パン', 'area_id' => 1
                ],
                [
                    'name' => 'コッペパン', 'area_id' => 3
                ],
            ]
        );
    }
}
