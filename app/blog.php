<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class blog extends Model
{
    protected $guarded = [];
    /**
     * Get the user that owns the blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blogcategory(): BelongsTo
    {
        return $this->belongsTo(blogcategory::class,);

    }
    /**
     * Get all of the comments for the blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }
}
