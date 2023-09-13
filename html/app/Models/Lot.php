<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $table = 'lots';
    protected $guarded = false;

    public function habitation() {
        return $this->belongsTo(Habitation::class, 'habitations_id');
    }
}
