<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'blog_id'
    ];

    function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
