<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = false;

    public function blogs() {
        return $this->belongsToMany(Blog::class, 'blogs_categories', 'category_id', 'blog_id');
    }
}
