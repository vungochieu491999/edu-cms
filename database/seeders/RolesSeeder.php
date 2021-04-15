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
        $author = Role::create([
            'name' => 'Phóng viên',
            'slug' => 'author',
            'permissions' => [],
            'description' => 'Chức năng viết bài',
        ]);

        $editor = Role::create([
            'name' => 'Biên tập viên',
            'slug' => 'editor',
            'permissions' => [],
            'description' => 'Chức năng viết bài và xuất bản',
        ]);
    }
}
