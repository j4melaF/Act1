<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
   protected $fillable = [
    'bio',
    'school'
   ];

   public function profile(): HasOne
   {
        return $this->hasOne(Profile::class);
   }

   public function user(): BelongsTo
   {
        return $this->belongsTo(User::class);
   }

}
