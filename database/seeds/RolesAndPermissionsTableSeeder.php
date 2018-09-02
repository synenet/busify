<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        $admin = Role::create([
            'name' => "admin"
        ]);

        $createCity = Permission::create([
            'name' => 'createCity'
        ]);

        $readCity = Permission::create([
            'name' => 'readCity'
        ]);

        $updateCity = Permission::create([
            'name' => 'updateCity'
        ]);

        $deleteCity = Permission::create([
            'name' => 'deleteCity'
        ]);

        $admin->givePermissionTo($createCity);
        $admin->givePermissionTo($readCity);
        $admin->givePermissionTo($updateCity);
        $admin->givePermissionTo($deleteCity);

        $user->assignRole($admin);
    }
}
