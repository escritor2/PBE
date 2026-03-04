<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function pedido() {
        $pedidos= \App\Models\Pedidos::all(); // busca todos os pedidos
        return view('pedidos.index' , compact('pedidos'));
    }
}
