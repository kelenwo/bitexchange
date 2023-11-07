<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;

 class Referrals extends Model
{
     use HasFactory;

     protected $fillable = [
         'amount',
     ];

     public function user(): BelongsTo
     {
         return $this->belongsTo(Users::class, 'user_id', 'id');
     }

     public function referral(): BelongsTo
     {
         return $this->belongsTo(Users::class, 'referral_id', 'id');
     }

}
