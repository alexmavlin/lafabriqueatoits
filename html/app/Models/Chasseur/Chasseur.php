<?php

namespace App\Models\Chasseur;

use Illuminate\Database\Eloquent\Model;

class Chasseur extends Model
{
    protected $table = 'chasseurs';
    protected $guarded = false;

    public function cards() {
        return $this->hasMany(Card::class, 'chasseur_id');
    }
    public function faqs() {
        return $this->hasMany(Faq::class, 'chasseur_id');
    }
}
