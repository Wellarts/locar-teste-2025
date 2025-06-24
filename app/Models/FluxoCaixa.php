<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class FluxoCaixa extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'valor',
        'tipo',
        'obs',
        'caixa_id',
       
    ];

    public function caixa()
    {
        return $this->belongsTo(Caixa::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
        // Chain fluent methods for configuration options
    }
}
