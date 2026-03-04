<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Controle de Estoque (Demo)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Produto 1: Alerta de Estoque Baixo -->
                    <div class="border-2 border-red-100 p-5 rounded-lg shadow-sm bg-white relative">
                        <div class="absolute top-2 right-2">
                            <span class="animate-pulse bg-red-100 text-red-700 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">
                                
                            </span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-900">Tecido Algodão Cru</h3>
                        <p class="text-xs text-gray-500 mb-4">SKU: TEX-001</p>
                        
                        <div class="flex justify-between items-end">
                            <div>
                                <span class="text-xs text-gray-400 font-semibold uppercase">Quantidade</span>
                                <p class="text-3xl font-black text-red-600">5 <small class="text-sm font-normal text-gray-500">m²</small></p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 font-semibold uppercase">Mín. Desejado</span>
                                <p class="text-sm font-bold text-gray-700">50 m²</p>
                            </div>
                        </div>
                        <button class="mt-4 w-full bg-red-600 text-white text-xs font-bold py-2 rounded hover:bg-red-700 transition">
                            PEDIR REPOSIÇÃO
                        </button>
                    </div>

                    <!-- Produto 2: Estoque OK -->
                    <div class="border border-gray-200 p-5 rounded-lg shadow-sm bg-white">
                        <h3 class="font-bold text-lg text-gray-900">Botão Perolado 12mm</h3>
                        <p class="text-xs text-gray-500 mb-4">SKU: ACC-442</p>
                        
                        <div class="flex justify-between items-end">
                            <div>
                                <span class="text-xs text-gray-400 font-semibold uppercase">Quantidade</span>
                                <p class="text-3xl font-black text-green-600">1.200 <small class="text-sm font-normal text-gray-500">un</small></p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 font-semibold uppercase">Mín. Desejado</span>
                                <p class="text-sm font-bold text-gray-700">500 un</p>
                            </div>
                        </div>
                        <button class="mt-4 w-full bg-gray-100 text-gray-600 text-xs font-bold py-2 rounded hover:bg-gray-200 transition">
                            AJUSTAR ESTOQUE
                        </button>
                    </div>

                    <!-- Produto 3: Estoque Moderado -->
                    <div class="border border-gray-200 p-5 rounded-lg shadow-sm bg-white">
                        <h3 class="font-bold text-lg text-gray-900">Zíper Nylon 20cm</h3>
                        <p class="text-xs text-gray-500 mb-4">SKU: ACC-089</p>
                        
                        <div class="flex justify-between items-end">
                            <div>
                                <span class="text-xs text-gray-400 font-semibold uppercase">Quantidade</span>
                                <p class="text-3xl font-black text-yellow-500">45 <small class="text-sm font-normal text-gray-500">un</small></p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 font-semibold uppercase">Mín. Desejado</span>
                                <p class="text-sm font-bold text-gray-700">40 un</p>
                            </div>
                        </div>
                        <button class="mt-4 w-full bg-gray-100 text-gray-600 text-xs font-bold py-2 rounded hover:bg-gray-200 transition">
                            AJUSTAR ESTOQUE
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
