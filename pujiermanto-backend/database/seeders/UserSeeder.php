<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'PujiErmanto',
            'username' => 'puji122',
            'email' => 'pujiermanto@gmail.com',
            'password' => Hash::make('puji321123'),
            'roles' => json_encode(["ADMIN"]),
            'status' => 'ACTIVE',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now(),
            'phone' => '6288222668778'
        ]);
    }
}
