<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $season = [
            "春",
            "夏",
            "秋",
            "冬"
        ];

        foreach ($season as $name) {
            DB::table('seasons')->insert([
                'name' => $name,
            ]);
        }
    }
}
