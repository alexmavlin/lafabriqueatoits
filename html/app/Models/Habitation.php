<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    protected $table = 'habitations';
    protected $guarded = false;

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function images() {
        return $this->hasMany(Image::class, 'habitations_id');
    }

    public function lots() {
        return $this->hasMany(Lot::class, 'habitations_id');
    }
}
