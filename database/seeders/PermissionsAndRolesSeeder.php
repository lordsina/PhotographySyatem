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
            'ایجادپست', 'ویرایش پست', 'حذف پست',
            'نمایش پست', 'ایجاد کاربر', 'حذف کاربر',
            'ویریش کاربر','نمایش کاربر'
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        // Create roles and assign random permissions
        $roles = [
            'ادمین', 'ویرایشگر', 'نویسنده','عکاس','روتوشکار','پرزنت','نورپرداز','مشتری','فروشنده','مدیریت کاربران','کاربر معمولی','کاربر تحریم شکن'
        ];

        foreach ($roles as $roleName) {
            $role = Role::create(['name' => $roleName]);
            $randomPermissions = Permission::inRandomOrder()->limit(rand(1, count($permissions)))->get();
            $role->syncPermissions($randomPermissions);
        }

    }
}
