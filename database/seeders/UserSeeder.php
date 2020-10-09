<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@ayosparring.com',
                'phone_number' => '0987654321',
                'role' => 1,
                'verified' => 1,
                'verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'created_by' => 'Seeder',
                'updated_at' => Carbon::now(),
                'updated_by' => 'Seeder',
                'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y'
            ],
        ]);
    }
}
