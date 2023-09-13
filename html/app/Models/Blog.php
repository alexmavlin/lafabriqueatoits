<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded = false;

    public function category() {
        return $this->belongsToMany(Category::class, 'blogs_categories', 'blog_id', 'category_id');
    }
}
