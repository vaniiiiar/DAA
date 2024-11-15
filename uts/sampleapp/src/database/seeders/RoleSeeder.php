<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void 
    {
        // Ensure roles exist
        $pelangganRole = Role::firstOrCreate(['name' => 'Pelanggan', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        
        // Assign roles to specific users based on email
        $pelangganUser = User::where('email', 'plg@admin.com')->first();
        $adminUser = User::where('email', 'admin@admin.com')->first();

        if ($pelangganUser) {
            $pelangganUser->assignRole($pelangganRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}
