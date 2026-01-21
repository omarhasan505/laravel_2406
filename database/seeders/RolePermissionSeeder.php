<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Editor' , 'admin' , 'viewer' , 'Manager', 'Executive' , 'Ordinator' , 'Director'];
        foreach($roles as  $role){
            Role::firstOrCreate(
                ['name' => $role],
                ['guard_name' => 'web']
             );
        }

        $permissions = ['edit' , 'delet' , 'view' , 'create' ];
        foreach($permissions as  $permission){
                Permission::firstOrCreate(
                ['name' => $permission],
                ['guard_name' => 'web']
                );
        }

    }
}
