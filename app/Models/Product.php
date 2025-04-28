<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produits';

    // Les colonnes autorisées à être massivement assignées
    protected $fillable = [
        'nom', 'description', 'prix', 'image_url',
    ];

    // Relation avec le modèle `Panier`
    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }
}
