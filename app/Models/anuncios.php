<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descricao',
        'id_marca',
        'id_modelo',
        'preco',
        'valor_fixo',
        'data_registo',
        'cor',
        'estado',
        'versao',
        'combustivel',
        'quilometragem',
        'potencia',
        'cilindrada',
        'retoma',
        'financiamento',
        'segmento',
        'metalizado',
        'caixa',
        'lotacao',
        'portas',
        'classe_veiculo',
        'garantia_stand',
        'nr_registos',
        'tracao',
        'livro_revisoes',
        'seg_chave',
        'jantes_liga_leve',
        'estofos',
        'medida_jantes',
        'airbags',
        'ar_condicionado',
        'importado',
        'fotos',
    ];
}
