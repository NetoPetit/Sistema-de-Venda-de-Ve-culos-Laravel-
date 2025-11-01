<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nomeCompleto',
        'cpf',
        'dataNasc',
        'email',
        'endereco',
        'sexo'
    ];
}
