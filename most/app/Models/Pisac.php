<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pisac extends Model
{
    use HasFactory;

    protected $table = 'pisci';

    protected $fillable = [
        'naziv'
    ];

    public function knjige()
    {
        return $this->hasMany(Knjiga::class);
    }
}
