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
        $author = Role::where('slug', 'author')->first();
        $editor = Role::where('slug', 'editor')->first();

        $user1 = User::create([
            'first_name' => 'Phóng',
            'last_name' => 'viên 1',
            'username' => 'edumad_pv1',
            'email' => 'pv1@allaravel.dev',
            'password' => bcrypt('123456')
        ]);
        $user1->roles()->attach($author);

        $user2 = \App\Models\User::create([
            'first_name' => 'Phóng',
            'last_name' => 'viên 2',
            'username' => 'edumad_pv2',
            'email' => 'pv2@allaravel.dev',
            'password' => bcrypt('123456')
        ]);
        $user2->roles()->attach($author);

        $user3 = User::create([
            'first_name' => 'Biên tập',
            'last_name' => 'viên 1',
            'username' => 'edumad_btv1',
            'email' => 'btv1@allaravel.dev',
            'password' => bcrypt('123456')
        ]);
        $user3->roles()->attach($editor);
    }
}
