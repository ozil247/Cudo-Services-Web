<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{
    protected $guarded = [];
    /**
     * Get the comment that owns the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog(): BelongsTo
    {
        return $this->belongsTo(blog::class);
    }
}
