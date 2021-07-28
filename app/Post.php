<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{

    protected $fillable = ['image', 'title', 'subtitle', 'body', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
