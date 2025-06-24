<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    use HasFactory;

    protected $table = 'caixas';

    protected $fillable = [
        'nome',
        'descricao',
        'saldo_atual',
        'ativo',
        'banco_id',
    ];

    public function banco()
    {
        return $this->belongsTo(Banco::class);
    }

    public function fluxoCaixas()
    {
        return $this->hasMany(FluxoCaixa::class);
    }

    public function locacao()
    {
        return $this->hasMany(Locacao::class);
    }

    public function contasReceber()
    {
        return $this->hasMany(ContasReceber::class);
    }
}
