<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory;

    // Relasi one-to-many dengan tabel images (seorang user bisa memiliki banyak gambar)
    public function images(): HasMany
    {
        return $this->hasMany(Images::class);
    }

    // Relasi one-to-many dengan tabel comments (seorang user bisa memberikan banyak komentar)
    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }

    // Relasi many-to-many dengan tabel followers (mengikuti dan diikuti)
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followers', 'followed_id', 'follower_id');
    }

    public function following(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'followed_id');
    }

    // Relasi many-to-many dengan tabel likes (seorang user bisa menyukai banyak gambar)
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Images::class, 'likes');
    }
}
