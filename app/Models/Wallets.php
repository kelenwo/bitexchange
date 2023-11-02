<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallets extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'email', 'email');
    }

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(Gateways::class, 'method', 'code');
    }
}

