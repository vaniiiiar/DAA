<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggan = Pelanggan::first();

        Transaksi::create([
            'customer_id' => $pelanggan->id,
            'transaction_date' => now(),
            'details' => 'Pembelian Martabak 1 Porsi',
        ]);

        Transaksi::create([
            'customer_id' => $pelanggan->id,
            'transaction_date' => now(),
            'details' => 'Pembelian Martabak 2 Porsi',
        ]);
    }
}
