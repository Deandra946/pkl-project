<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relasi many-to-one (sebuah komentar hanya milik satu user)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi many-to-one (sebuah komentar hanya untuk satu gambar)
    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }
}
