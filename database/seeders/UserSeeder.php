<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model
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
        User::create([
            'name' => 'أية عبد السلام',
            'email' => 'ayaabdulsalam@gmail.com',
            'password' => Hash::make('12345678'), // Always hash passwords
            'age'=>22,
            'sex'=>'Female',
            'phone_number'=>'0921234567',
            'role'=>2
        ]);
    }
}
