<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'roi',
        'duration',
        'frequency',
        'min',
        'max',
    ];

}

