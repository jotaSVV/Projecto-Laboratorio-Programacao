<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilizadores extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'apelido', 'email', 'telefone', 'data_nascimento', 'sexo', 'tipovendedor', 'admin', 'password', 'id_freguesia', 'foto_perfil'];
}
