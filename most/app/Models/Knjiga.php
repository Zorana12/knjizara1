<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;

    protected $table = 'knjige';

    protected $fillable = [
        'naziv',
        'opis',
        'pisac_id',
        'zanr_id',
        'cena'
    ];

    public function pisac()
    {
        return $this->belongsTo(Pisac::class);
    }

    public function zanr()
    {
        return $this->belongsTo(Zanr::class);
    }


}
