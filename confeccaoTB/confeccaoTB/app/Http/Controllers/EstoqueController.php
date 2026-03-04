<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index() {
        $estoques= \App\Models\estoque::all(); // busca todos os itens do estoque
        return view('estoque.index' , compact('estoques'));
    }
}
