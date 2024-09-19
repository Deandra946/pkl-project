<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Images extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relasi many-to-one (sebuah gambar hanya dimiliki oleh satu user)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi one-to-many dengan tabel comments (sebuah gambar bisa memiliki banyak komentar)
    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }

    // Relasi many-to-many dengan tabel tags (sebuah gambar bisa memiliki banyak tag)
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tags::class, 'image_tags');
    }

    // Relasi many-to-many dengan tabel likes (sebuah gambar bisa disukai oleh banyak user)
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes');
    }
}

