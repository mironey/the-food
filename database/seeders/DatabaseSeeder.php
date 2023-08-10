<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions
        $permissions= ['edit recipes', 'delete recipes', 'publish recipes', 'unpublish recipes'];
        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('edit recipes');
        $role1->givePermissionTo('delete recipes');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit recipes');
        $role2->givePermissionTo('delete recipes');
        $role2->givePermissionTo('publish recipes');
        $role2->givePermissionTo('unpublish recipes');

        $role3 = Role::create(['name' => 'Super-Admin']);

        $user = User::factory()->create([
            'name' => 'Writer User',
            'email' => 'writer@foodblog.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@foodblog.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Super Admin User',
            'email' => 'superadmin@foodblog.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($role3);

        User::factory(5)->create();
        Recipe::factory(15)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
