<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $guarded = false;

    public function habitation() {
        return $this->belongsTo(Habitation::class, 'habitations_id');
    }
}
