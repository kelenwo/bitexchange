<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fields extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'settings'
    ];

    public function gateway(): BelongsTo
    {
        return $this->belongsTo(Gateways::class, 'gateway_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Gateways::class, 'user_id', 'id');
    }
}

