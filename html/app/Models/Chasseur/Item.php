<?php

namespace App\Models\Chasseur;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $guarded = false;

    public function faqs() {
        return $this->hasMany(Faq::class, 'item_id');
    }
}
