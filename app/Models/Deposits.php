<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposits extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'hash',
        'receipt',
        'transaction_id',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(Gateways::class, 'gateway_id', 'id');
    }
}

