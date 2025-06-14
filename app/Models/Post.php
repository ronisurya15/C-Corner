<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // Relations
    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'posts_category_id');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
