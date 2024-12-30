<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        $this->belongsTo(Category::class);
    }
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class) ;
    }
}
