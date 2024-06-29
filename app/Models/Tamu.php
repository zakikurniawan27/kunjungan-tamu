<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'alamat'
    ];
    

    public function kunjungans(): HasMany{
        return $this->hasMany(Kunjungan::class);
    }
}
