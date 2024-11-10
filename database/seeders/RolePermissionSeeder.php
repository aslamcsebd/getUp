<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);

        // Create permissions
        $manageAllContent = Permission::create(['name' => 'manage_all_content']);
        $updateArticles = Permission::create(['name' => 'update_articles']);

        // Attach permissions to roles
        $adminRole->permissions()->attach([$manageAllContent->id, $updateArticles->id]);
        $editorRole->permissions()->attach($updateArticles->id);

        // Add user roles

        for ($i = 1; $i < 3; $i++) {
            RoleUser::insert([
                'user_id' => 1,
                'role_id' => $i
            ]);
        }
    }
}
