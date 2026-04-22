<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

// GET
Route::get('pokemon/{nome}', function ($nome) {
    $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$nome}");

    if ($response->successful()) {
        $pokemon = $response->json();
        
       
        return response()->json([
            'status' => 'success',
            'results' => [
                'identificador' => $pokemon['id'],
                'nome_pokemon' => ucfirst($pokemon['name']),
                'foto' => $pokemon['sprites']['front_default']
            ]
        ]); 
    } else {
        return response()->json(['error' => 'Pokémon não encontrado'], 404);
    }
});

// POST
Route::post('pokemon/novo', function (Request $request) {
    $data = $request->validate([
        'nome' => 'required|string',
        'tipo' => 'required|string',
    ]);

    $newPokemon = [
        'id' => rand(1000, 9999), 
        'name' => ucfirst($data['nome']),
        'type' => $data['tipo'],
    ];

    return response()->json([
        'status' => 'success',
        'message' => 'Novo Pokémon criado com sucesso!',
        'pokemon' => $newPokemon
    ], 201);
});

// Usuário - GET 
Route::get('usuarios', function () {
    $response = Http::get('https://dummyjson.com/users');

    if ($response->successful()) {
        return response()->json([
            'status' => 'success',
            'data' => $response->json()['users']
        ]);
    }

    return response()->json(['error' => 'Falha ao buscar usuários'], 500);
});

// Usuário - POST 
Route::post('usuarios/novo', function (Request $request) {
    $data = $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'age' => 'required|integer',
    ]);

    $response = Http::post('https://dummyjson.com/users/add', [
        'firstName' => $data['firstName'],
        'lastName' => $data['lastName'],
        'age' => $data['age'],
    ]);

    if ($response->successful()) {
        return response()->json([
            'status' => 'success',
            'message' => 'Usuário criado com sucesso!',
            'usuario' => $response->json()
        ], 201);
    }

    return response()->json(['error' => 'Falha ao criar usuário'], 500);
});

Route::get('/', function () {
    return view('welcome');
});
