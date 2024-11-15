<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loyalti extends Model
{
    use HasFactory;

    protected $table = 'loyalty';

    protected $fillable = [
        'customer_id',
        'points',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'customer_id');
    }
}
