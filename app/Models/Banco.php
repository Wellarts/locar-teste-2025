<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'bancos';

    protected $fillable = [
        'nome',
        'codigo',
        'nome,'
    ];

    public function caixas()
    {
        return $this->hasMany(Caixa::class);
    }
}
