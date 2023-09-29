<?php

namespace App\Models\ImmoNeuf;

use App\Models\Chasseur\Faq;
use Illuminate\Database\Eloquent\Model;

class ImmoNeuf extends Model
{
    protected $table = 'immo_neufs';
    protected $guarded = false;

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'immo_neuf_id');
    }
}
