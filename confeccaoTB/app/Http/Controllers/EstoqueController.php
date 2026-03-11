<?php

namespace App\Http\Controllers;

use App\Models\estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index() {
        $estoques = estoque::all();
        return view('estoque.index', compact('estoques'));
    }

    public function create() {
        return view('estoque.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:0',
        ]);

        estoque::create($request->all());

        return redirect()->route('estoque.index')->with('success', 'Item cadastrado com sucesso!');
    }

    public function edit() {
        return view('estoque.index');
    }

    public function destroy($id)
    {
        $item = estoque::findOrFail($id);
        $item->delete();

        return redirect()->route('estoque.index')->with('success', 'Item excluído com sucesso!');
    }
}
