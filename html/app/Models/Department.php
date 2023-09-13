<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $guarded = false;

    public function habitations() {
        return $this->hasMany(Habitation::class, 'department_id');
    }
}
