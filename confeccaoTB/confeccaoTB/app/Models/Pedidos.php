<?php

namespace App\Models;

use App\Models\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['nome', 'telefone', 'endereco'];
}
