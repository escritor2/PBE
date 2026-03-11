<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedores'));
    }

    public function create() {
        return view('fornecedor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|unique:fornecedor',
            'endereco' => 'nullable|string',
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit() {
        return view('fornecedor.index');
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor excluído com sucesso!');
    }
}
