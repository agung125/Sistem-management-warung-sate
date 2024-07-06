<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Create user
            $user = User::firstOrCreate([
                'email' => 'admin@gmail.com',
            ], [
                'name' => 'dimas ardiyansah',
                'password' => Hash::make('password'),
            ]);

            // Check if the role 'admin' already exists, if not create it
            $role = Role::firstOrCreate(['name' => 'admin']);
            $permissions = Permission::all();

            // Assign all permissions to the role
            $role->syncPermissions($permissions);

            // Assign role to user
            $user->assignRole($role->name);
        });
    }
}
