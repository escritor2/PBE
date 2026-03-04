<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gerenciamento de Fornecedores (Demo)</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Fornecedor 1 -->
                    <div class="border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition bg-white">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-900 uppercase">Tecidos Brasil S.A.</h3>
                            <span class="text-[10px] px-2 py-1 rounded bg-gray-100 text-gray-600 font-mono">ID: 01</span>
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm text-gray-600 flex flex-col">
                                <span class="text-xs font-semibold text-gray-400 uppercase">CNPJ:</span>
                                <span class="text-gray-800">12.345.678/0001-90</span>
                            </p>
                            <p class="text-sm text-gray-600 flex flex-col">
                                <span class="text-xs font-semibold text-gray-400 uppercase">Contato:</span>
                                <span class="text-gray-800">vendas@tecidosbrasil.com.br</span>
                                <span class="text-gray-500 text-xs">(11) 4002-8922</span>
                            </p>
                        </div>
                    </div>

                    <!-- Fornecedor 2 -->
                    <div class="border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition bg-white">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-900 uppercase">Botões & Cia</h3>
                            <span class="text-[10px] px-2 py-1 rounded bg-gray-100 text-gray-600 font-mono">ID: 02</span>
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm text-gray-600 flex flex-col">
                                <span class="text-xs font-semibold text-gray-400 uppercase">CNPJ:</span>
                                <span class="text-gray-800">98.765.432/0001-10</span>
                            </p>
                            <p class="text-sm text-gray-600 flex flex-col">
                                <span class="text-xs font-semibold text-gray-400 uppercase">Contato:</span>
                                <span class="text-gray-800">contato@botoescia.com</span>
                                <span class="text-gray-500 text-xs">(21) 3344-5566</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
