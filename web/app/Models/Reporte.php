<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
        'titulo',
        'tipo',
        'sector',
        'descripcion',
        'fecha_reporte',
        'estado',
    ];

    protected function casts(): array
    {
        return [
            'fecha_reporte' => 'date',
        ];
    }
}
