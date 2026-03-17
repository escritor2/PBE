<?php

namespace App\Http\Controllers;
use App\Models\Clientes;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        $clientes= \App\Models\Clientes::all(); // busca todos os clientes
        return view('clientes.index' , compact('clientes'));
    }


//exibe o formulario de cadastro (a janela/pagina de inserção)
public function create() {
    return view('clientes.create');
}

// recebe os dados do formulário e salva no banco de dados
public function store(Request $request) 
{
    // 1.validação simples para evitar dados vazios ou duplicados//
    $request->validate([
        'nome' => 'required|string|max:255',
        'cpf' => 'required|string|unique:clientes',
        'email' => 'required|email|unique:clientes',
        'telefone' => 'required|string',
        'endereco' => 'nullable|string',
    ]);

    //2.salva o novo cliente
    Clientes::create($request->all());

    //3.redireciona para a lista de clientes com uma mensagem de sucesso
    return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
}
   // salva a alteração no banco
   public function update(Request $request, Clientes $cliente)
   {
    $request->validate([
        'nome' => 'required|string|max:255',
        'cpf' => 'required|string|unique:clientes,cpf,' . $cliente->id,
        'email' => 'required|email|unique:clientes,email,' . $cliente->id,
        'telefone' => 'required|string',
        'endereco' => 'nullable|string',
    ]);

    $cliente->update($request->all());

    return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
   }

   //exclui o cliente

   public function destroy(Clientes $cliente)
   {
       $cliente->delete();

       return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
   }

   public function edit($id)
   {
       $cliente = Clientes::findOrFail($id);
       return view('clientes.edit', compact('cliente'));
   }
}