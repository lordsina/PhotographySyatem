<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionsAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            'create post', 'edit post', 'delete post',
            'create comment', 'edit comment', 'delete comment',
            'manage users'
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        // Create roles and assign random permissions
        $roles = [
            'admin', 'editor', 'author'
        ];

        foreach ($roles as $roleName) {
            $role = Role::create(['name' => $roleName]);
            $randomPermissions = Permission::inRandomOrder()->limit(rand(1, count($permissions)))->get();
            $role->syncPermissions($randomPermissions);
        }

    }
}
