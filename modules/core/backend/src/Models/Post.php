<?php

namespace Edumad\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'body', 'user_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
