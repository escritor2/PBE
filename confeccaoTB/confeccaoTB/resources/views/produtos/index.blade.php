<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catálogo de Produtos (Demo)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Botão de Novo Produto simulado -->
            <div class="mb-6 flex justify-end">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow transition text-sm">
                    + Novo Produto
                </button>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    
                    <!-- Produto 1 -->
                    <div class="group border border-gray-200 rounded-xl overflow-hidden bg-white hover:shadow-lg transition duration-300">
                        <div class="h-48 bg-gray-100 flex items-center justify-center relative">
                            <span class="text-gray-400 text-xs">SEM IMAGEM</span>
                            <div class="absolute top-2 left-2 bg-indigo-500 text-white text-[10px] px-2 py-1 rounded font-bold uppercase">
                                Camiseta
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition truncate">Camiseta Algodão Premium</h3>
                            <p class="text-xs text-gray-500 mt-1">Ref: PROD-001 | Tam: P, M, G</p>
                            
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-indigo-600 font-black text-lg">R$ 89,90</span>
                                <span class="text-[10px] text-green-600 bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Ativo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 2 -->
                    <div class="group border border-gray-200 rounded-xl overflow-hidden bg-white hover:shadow-lg transition duration-300">
                        <div class="h-48 bg-gray-100 flex items-center justify-center relative">
                            <span class="text-gray-400 text-xs">SEM IMAGEM</span>
                            <div class="absolute top-2 left-2 bg-indigo-500 text-white text-[10px] px-2 py-1 rounded font-bold uppercase">
                                Calça
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition truncate">Calça Jeans Slim Fit</h3>
                            <p class="text-xs text-gray-500 mt-1">Ref: PROD-042 | Cor: Azul Escuro</p>
                            
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-indigo-600 font-black text-lg">R$ 149,00</span>
                                <span class="text-[10px] text-green-600 bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Ativo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 3 -->
                    <div class="group border border-gray-200 rounded-xl overflow-hidden bg-white hover:shadow-lg transition duration-300">
                        <div class="h-48 bg-gray-100 flex items-center justify-center relative opacity-75">
                            <span class="text-gray-400 text-xs">SEM IMAGEM</span>
                            <div class="absolute top-2 left-2 bg-gray-500 text-white text-[10px] px-2 py-1 rounded font-bold uppercase">
                                Inverno
                            </div>
                        </div>
                        <div class="p-4 bg-gray-50">
                            <h3 class="font-bold text-gray-400 truncate text-gray-900">Moletom Canguru</h3>
                            <p class="text-xs text-gray-400 mt-1">Ref: PROD-089 | Fora de Linha</p>
                            
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-gray-400 font-black text-lg line-through">R$ 120,00</span>
                                <span class="text-[10px] text-gray-500 bg-gray-200 px-2 py-0.5 rounded-full">Inativo</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
