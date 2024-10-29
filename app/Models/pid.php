<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pid extends Model
{
    
    protected $table = 'pids';

    protected $fillable = [
        'pid',
        'creacion',
        'tipo_transmision',
        'fecha_inicial',
        'fecha_final',
        'origen',
        'destino',
        'descripcion_evento',
    ];

}
