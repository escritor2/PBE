<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores= \App\Models\Fornecedor::all(); // busca todos os fornecedores
        return view('fornecedor.index' , compact('fornecedores'));
    }
}
