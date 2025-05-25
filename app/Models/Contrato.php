<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = ['texto'];

    public function locacao()
    {
        return $this->hasMany(Locacao::class);
    }
}
