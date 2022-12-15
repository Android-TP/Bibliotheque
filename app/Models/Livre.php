<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        "livre_id",
        "resume",
        "maison_edition",
        "isbn"
    ];

    /**
     * Get the user associated with the Livre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail()
    {
        return $this->hasOne(Detail_scientifique::class, "livre_id", "id");
    }
    /**
     * Get the user associated with the Livre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorie(): HasOne
    {
        return $this->hasOne(Categorie::class);
    }
}
