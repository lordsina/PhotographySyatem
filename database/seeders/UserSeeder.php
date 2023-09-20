<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        // Define First User
        DB::table('users')->insert([
            'first_name' => "سینا",
            'last_name' => "رشیدی آذر",
            'username' => "sinarashidiazar",
            'email' => "sinarashidiazar@hotmail.com",
            'email_verified_at' => now(),
            'phone_number' => "+989364900199",
            'phone_verified' => true,
            'phone_verification_code' => null,
            'address' => "ایران - تهران",
            'credit_card_number' => "6037112233445566",
            'active' => true,
            'password' => bcrypt('password'), // Default password for all users
            'remember_token' => Str::random(10),

        ]);

       // Define 50 Users
        User::factory(50)->create()->each(function ($user) {
            // Assign random roles to the user
            $roles = Role::inRandomOrder()->limit(rand(1, 3))->get();
            $user->assignRole($roles);
        });

        // Define Last User
        DB::table('users')->insert([
            'first_name' => "بهزاد",
            'last_name' => "دشتی",
            'username' => "behzaddasti",
            'email' => "behzad@hotmail.com",
            'email_verified_at' => now(),
            'phone_number' => "+98922222222",
            'phone_verified' => true,
            'phone_verification_code' => null,
            'address' => "ایران - تهران",
            'credit_card_number' => "6037112233445566",
            'active' => true,
            'password' => bcrypt('password'), // Default password for all users
            'remember_token' => Str::random(10),
        ]);


        // User::factory(10)->create()->each(function ($user) {
        //     $roles = $user->getRoleNames();
        //     dump($roles); // Debugging output
        // });

        

    }
}
