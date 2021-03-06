<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    use HasFactory;
    protected $fillable = ['nome_movimentacao', 'valor_movimentacao', 'descricao_movimentacao', 'tipo_movimentacao', 'data_movimentacao', 'user_id'];
}
