<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    public function category(): BelongsTo

    {
        return $this->belongsTo(Categories::class, 'jobcategory_id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
