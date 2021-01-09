<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list

        //Products
        Permission::create(['name' => 'products.index']);
        Permission::create(['name' => 'products.edit']);
        Permission::create(['name' => 'products.show']);
        Permission::create(['name' => 'products.create']);
        Permission::create(['name' => 'products.destroy']);
        //Users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.destroy']);
        //Roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.show']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.destroy']);

        //Admin
        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo([
            'products.index',
            'products.edit',
            'products.show',
            'products.create',
            'products.destroy',
            'users.index',
            'users.edit',
            'users.show',
            'users.destroy',
            'roles.index',
            'roles.edit',
            'roles.show',
            'roles.create',
            'roles.destroy'
        ]);

        //Guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
            'products.index',
            'products.show',
            'users.index',
            'users.show',
            'roles.index',
            'roles.show'
        ]);

        //User Admin
        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
