<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'ds_produto',
        'lote_produto',
        'dt_vencimento',
        'qtd_produto'
    ];

}
?>