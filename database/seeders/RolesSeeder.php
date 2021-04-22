<?php

namespace Database\Seeders;

use Edumad\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = Role::create([
            'name' => 'Member',
            'slug' => 'member',
            'permissions' => json_encode([]),
            'description' => 'Tài khoản khách',
        ]);

        $employee = Role::create([
            'name' => 'Employee',
            'slug' => 'employee',
            'permissions' => json_encode([
                'dashboard.index' => true,
            ]),
            'description' => 'Tài khoản nhân viên thường',
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => json_encode([
                'dashboard.index' => true,
                'post.update' => true,
                'post.publish' => true,
            ]),
            'description' => 'Tài khoản admin',
        ]);
    }
}
