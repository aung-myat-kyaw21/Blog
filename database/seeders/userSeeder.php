<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('blogs_lara_table')->insert([
           
        //     'title' => Str::random(10),
        //     'body' => Str::random(10),
        //     // 'body' => Hash::make('password'),
        // ]);
        DB::table('student')->insert([
           
            'name' => Str::random(10),
            'personal_details' => Str::random(10),
            // 'body' => Hash::make('password'),
        ]);
    }
}
