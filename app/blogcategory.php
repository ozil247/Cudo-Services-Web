<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class blogcategory extends Model
{
    protected $guarded = [];
    /**
     * Get all of the blogs for the blogcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs(): HasMany
    {
        return $this->hasMany(blog::class, );
    }
}
