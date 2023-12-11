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
        'deposits',
        'investments',
        'earnings',
        'withdrawals',
        'referrals'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}

