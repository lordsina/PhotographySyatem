<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              // Create roles and permissions
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $userRole = Role::create(['name' => 'user']); // New role

        $createPostPermission = Permission::create(['name' => 'create post']);
        $editPostPermission = Permission::create(['name' => 'edit post']);

        // Assign roles and permissions to users
        User::factory(50)->create()->each(function ($user) use ($adminRole, $editorRole, $userRole, $createPostPermission, $editPostPermission) {
            $randomRoles = fake()->randomElements([$adminRole, $editorRole, $userRole], fake()->numberBetween(1, 3));
            $user->assignRole($randomRoles);

            $randomPermissions = fake()->randomElements([$createPostPermission, $editPostPermission],fake()->numberBetween(0, 2));
            $user->givePermissionTo($randomPermissions);
        });
    }
}
