<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }
    public function post(): BelongsTo
    {
        $this->belongsTo(Post::class);
    }
}
