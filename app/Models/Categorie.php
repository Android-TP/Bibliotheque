<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "code"
    ];

    /**
     * Get all of the comments for the Categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function livres(): HasMany
    {
        return $this->hasMany(Livre::class);
    }
}
