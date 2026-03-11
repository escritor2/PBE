<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// EXERCÍCIO 01 - CRIAR UMA APLICAÇÃO PELO TERMINAL

Route::get('/pagina1', function() {
    return view('site/pagina1');
});

Route::get('/pagina2', function() {
    return view('site/pagina2');
});

Route::get('/pagina3', function() {
    return view('site/pagina3');
});

// EXERCÍCIO 02 – CRIAR UMA ROTA PARA ACESSO PÚBLICO PARA APLICAÇÃO

Route::any('/Liberado', function() {
    return "Permite todo conteúdo put, delete, get, post";
});

//EXERCÍCIO 03 - CRIAR UMA ROTA PARA ACESSO RESTRITO

Route::match(['put', 'delete'], '/restrito', function() {
    return "Permite acessos apenas para put e delete";
});

//EXERCÍCIO 04 - CRIAR PARÂMETROS PARA GET NAS ROTAS

Route::get('/parametros/{nome}/{idade}', function($nome, $idade) {
    return "O seu nome é: ".$nome. "<br>" . "Sua idade é: ".$idade;
});

// EXERCÍCIO 05 - CRIAR REDIRECIONAMENTOS, NOMES PARA ROTAS

Route::get('/inicio', function() {
    return view('site/pagina1');
});

Route::get('/desenvolvimento', function(){
    return view('site/pagina2');
});

Route::get('/conclusao', function() {
    return view('site/pagina3');
});

// EXERCÍCIO 06 - CRIAR UM GRUPO PARA GERENCIAMENTO DE PAINEL ADMINISTRATIVO

Route::group([
    'prefix'=> '/',
    'as' => '/',
], function() {
    Route::get('inicios', function() {
        return "inicios";
    })->name('inicios');

    Route::get('desenvolvimentos', function() {
        return "desenvolvimentos";
    })->name('desenvolvimentos');

    Route::get('conclusoes', function() {
        return "conclusoes";
    })->name('conclusoes');

});

Route::get('/', function() {
    // return redirect()->route('admin.inicio');
    // return redirect()->route('admin.desenvolvimento');
    return redirect()->route('admin.conclusao');
});
