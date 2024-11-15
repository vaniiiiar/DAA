<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions for pelanggan
        $Permission = [
           // Melihat produk
           'view_transaksi',
           'view_any_transaksi',
            'view_loyalti',
            'create_loyalti',
            'view_any_loyalti',
        ];

        foreach ($Permission as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to pelanggan role
        $pelangganRole = Role::firstOrCreate(['name' => 'Pelanggan']);
        $pelangganRole->givePermissionTo($Permission);
    }
}
