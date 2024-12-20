<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'customer_id',
        'transaction_date',
        'details',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'customer_id');
    }
}
