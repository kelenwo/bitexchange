<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'username',
        'method',
        'amount',
        'plan',
        'receipt',
        'transaction_id',
        'status',
        'date',
    ];
}
