<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'address',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'customer_id');
    }

    public function loyalty()
    {
        return $this->hasOne(Loyalti::class, 'customer_id');
    }
}
