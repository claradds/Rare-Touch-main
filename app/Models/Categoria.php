<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    // Se quiser, relacione com Produtos (se tiver o model Produto)
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
