<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();
        
        // Additional seeders
        $this->call([PelangganSeeder::class]);
        $this->call([TransaksiSeeder::class]);
        $this->call([LoyaltiSeeder::class]);
        $this->call([PermissionsSeeder::class]);

    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create Mahasiswa user if not exists
        $plgEmail = 'plg@admin.com';
        if (! User::where('email', $plgEmail)->exists()) {
            $plg = User::create([
                'name' => 'Pelanggan',
                'email' => $plgEmail,
                'password' => bcrypt('password'),
            ]);
            $plg->assignRole('Pelanggan');
        }
    }
}