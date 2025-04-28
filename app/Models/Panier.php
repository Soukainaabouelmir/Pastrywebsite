<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    // Déclare la table liée au modèle
    protected $table = 'paniers';

    // Les colonnes autorisées à être massivement assignées
    protected $fillable = [
        'user_id', 'produit_id', 'quantite',
    ];

    // Relation avec le modèle `User`
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle `Produit`
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
