<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class genreHistorical extends Model
{
    use HasFactory;
    protected $table = 'genre_historical';
    protected $guarded = [];

    public function peminjamanBuku(): HasMany
    {
        return $this->hasMany(PeminjamanBuku::class);
    }
}