<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\RoleAccess as Role;

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
            'role_id' => Role::all()->random()->id,
            'full_name' => 'Bao Minh',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'gender' => 1,
            'phone_number' => '0123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
