<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_user extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "matricule",
        "description",
        "image"
    ];


    /**
     * Get the user that owns the Detail_user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
