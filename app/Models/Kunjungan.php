<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tamu_id',
        'jam_kunjungan'
    ];

    public function tamus(): BelongsTo{
        return $this->belongsTo(Tamu::class);
    }

    public function keperluans(): HasMany{
        return $this->hasMany(Kepeluan::class);
    }
}
