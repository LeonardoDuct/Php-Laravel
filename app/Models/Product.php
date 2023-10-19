<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'preco', 'quantidade_estoque', 'descricao'];
    
    // Restante da definição do modelo
}
