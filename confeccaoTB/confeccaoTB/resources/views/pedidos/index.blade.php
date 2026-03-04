<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gerenciamento de Pedidos (Demo)</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Pedido 1 -->
                    <div class="border p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-lg">Pedido #1001</h3>
                            <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-800 uppercase font-semibold">Pago</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Cliente: João Silva</p>
                        <p class="text-sm text-gray-500">Data: 15/05/2024</p>
                        <p class="mt-4 text-green-600 font-bold text-xl">R$ 1.250,00</p>
                    </div>

                    <!-- Pedido 2 -->
                    <div class="border p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-lg">Pedido #1002</h3>
                            <span class="text-xs px-2 py-1 rounded bg-yellow-100 text-yellow-800 uppercase font-semibold">Pendente</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Cliente: Maria Oliveira</p>
                        <p class="text-sm text-gray-500">Data: 16/05/2024</p>
                        <p class="mt-4 text-green-600 font-bold text-xl">R$ 450,20</p>
                    </div>

                    <!-- Pedido 3 -->
                    <div class="border p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-lg">Pedido #1003</h3>
                            <span class="text-xs px-2 py-1 rounded bg-blue-100 text-blue-800 uppercase font-semibold">Enviado</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Cliente: Tech Solutions Ltda</p>
                        <p class="text-sm text-gray-500">Data: 16/05/2024</p>
                        <p class="mt-4 text-green-600 font-bold text-xl">R$ 3.800,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
