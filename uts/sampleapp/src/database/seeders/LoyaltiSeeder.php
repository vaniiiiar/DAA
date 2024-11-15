<?php

namespace Database\Seeders;

use App\Models\Loyalti;
use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoyaltiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggan = Pelanggan::first();

        Loyalti::create([
            'customer_id' => $pelanggan->id,
            'points' => 100,
        ]);
    }
}
