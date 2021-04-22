<?php

namespace Database\Seeders;

use Edumad\Models\Role;
use Edumad\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberRole   = Role::where('slug', 'member')->first();
        $employeeRole = Role::where('slug', 'employee')->first();
        $adminRole    = Role::where('slug', 'admin')->first();

        $super_admin = User::create([
            'first_name' => 'Vũ',
            'last_name' => 'Ngọc Hiếu',
            'username' => 'hieuvn8668',
            'email' => 'hieuvn@smartosc.com',
            'permissions' => json_encode([
                'dashboard.index' => true,
                'post.update' => true,
                'post.publish' => true,
            ]),
            'password' => bcrypt('123456'),
            'super_user' => 1
        ]);
        $super_admin->roles()->attach($adminRole);

        $member = User::create([
            'first_name' => 'Tài Khoản',
            'last_name' => 'Thành Viên',
            'username' => 'member1',
            'email' => 'member1@edumad.com',
            'permissions' => json_encode([]),
            'password' => bcrypt('123456')
        ]);
        $member->roles()->attach($memberRole);

        $employee = User::create([
            'first_name' => 'Trương',
            'last_name' => 'Thảo Nhi',
            'username' => 'employee1',
            'email' => 'employee1@edumad.com',
            'permissions' => json_encode([
                'dashboard.index' => true,
                'post.update' => true,
                'post.publish' => true,
            ]),
            'password' => bcrypt('123456')
        ]);
        $employee->roles()->attach($employeeRole);

        $admin = User::create([
            'first_name' => 'Nguyễn',
            'last_name' => 'Thị Admin',
            'username' => 'admin1',
            'email' => 'admin1@smartosc.com',
            'permissions' => json_encode([
                'dashboard.index' => true,
                'post.update' => true,
                'post.publish' => true,
            ]),
            'password' => bcrypt('123456'),
        ]);
        $admin->roles()->attach($adminRole);
    }
}
