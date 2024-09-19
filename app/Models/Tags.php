<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tags extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relasi many-to-many dengan tabel images (sebuah tag bisa dimiliki oleh banyak gambar)
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Images::class, 'image_tags');
    }
}

