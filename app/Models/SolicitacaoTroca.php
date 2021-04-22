<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoTroca extends Model
{
    use HasFactory;
    protected $table = 'solicitacao_troca';
    protected $primarykey ='id';
    protected $fillable = [
        "nome_cidadao",
        "rua",
        "numero",
        "bairro",
        "complemento",
        "status",
        "codigo"

    ];
}
