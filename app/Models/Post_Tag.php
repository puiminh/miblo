<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Post_Tag extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'tag_id'
    ];
}
