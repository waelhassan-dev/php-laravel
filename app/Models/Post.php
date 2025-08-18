<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'published']; //fields that can be updated

    protected $guarded = ['id']; //fields can't be updated (readyonly)
}
