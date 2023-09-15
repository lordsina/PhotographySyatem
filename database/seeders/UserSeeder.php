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
              // Create roles and permissions
        // $adminRole = Role::create(['name' => 'admin']);
        // $editorRole = Role::create(['name' => 'editor']);
        // $userRole = Role::create(['name' => 'user']);

        // $createPostPermission = Permission::create(['name' => 'create post']);
        // $editPostPermission = Permission::create(['name' => 'edit post']);

        // // Assign roles and permissions to users
        // User::factory(50)
        // ->create()
        // ->each(function ($user) use ($adminRole, $editorRole, $userRole, $createPostPermission, $editPostPermission) {
        //     $randomRoles = fake()->randomElements([$adminRole, $editorRole, $userRole], fake()->numberBetween(1, 3));
        //     $user->assignRole($randomRoles);
        //     $randomPermissions = 
        //     fake()->randomElements([$createPostPermission, $editPostPermission],
        //     fake()->numberBetween(0, 2));
        //     $user->givePermissionTo($randomPermissions);
        // });

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

        User::factory(50)->create()->each(function ($user) {
            // Assign random roles to the user
            $roles = Role::inRandomOrder()->limit(rand(1, 3))->get();
            $user->assignRole($roles);
        });


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
