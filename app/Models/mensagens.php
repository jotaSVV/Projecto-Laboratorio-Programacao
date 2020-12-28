<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensagens extends Model
{
    use HasFactory;
    protected $fillable = [
        'texto',
        'id_recetor',
        'id_emissor',
        'data',
        'fotos',
        'visto',
    ];


}
