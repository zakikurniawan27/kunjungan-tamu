<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keperluan extends Model
{
    use HasFactory;

    protected $fillable =[
        'kunjungan_id',
        'keperluan'
    ];

    public function kunjungans(): BelongsTo{
        return $this->belongsTo(Kunjungan::class);
    }
}
