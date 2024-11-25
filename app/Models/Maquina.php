<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    protected $table = 'maquinas_ativas';
    protected $fillable = [
        "colaborador",
        "departamento",
        "hostname",
        "ip",
        "mac_address",
        "observacao"
    ];
}
