<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'full_name' => 'carlos arturo',
            'email' => 'carlitorrego123@gmail.com',
            'password' => 'carlos123',
            'remenber_token' => Str::random(8),
            'status' => 'active',

        ]);
    }
}
