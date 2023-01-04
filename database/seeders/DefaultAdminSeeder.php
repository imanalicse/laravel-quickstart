<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Iman Ali',
            'email' => 'imanali.cse@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => UserRole::Admin->value,
        ]);
    }
}
