<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'name' => 'John Doe',
            'phone_number' => '08123456789',
            'email' => 'johndoe@example.com',
            'address' => 'Jl. Merdeka No. 1',
        ]);

        Pelanggan::create([
            'name' => 'Jane Smith',
            'phone_number' => '08234567890',
            'email' => 'janesmith@example.com',
            'address' => 'Jl. Raya No. 5',
        ]);
    }
}
