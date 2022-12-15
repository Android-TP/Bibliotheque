<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_scientifique extends Model
{
    use HasFactory;
    protected $fillable = [
        "livre_id",
        "auteur",
        "resume",
        "maison_edition",
        "isbn"
    ];

    /**
     * Get the livre that owns the Detail_scientifique
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livre(): BelongsTo
    {
        return $this->belongsTo(Livre::class);
    }
}
