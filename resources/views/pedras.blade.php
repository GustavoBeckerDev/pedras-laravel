@extends('master')

@section('content')

<div class="container mx-auto px-6 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-purple-400">Pedras Naturais</h1>

        <!-- Botão Cadastrar Pedra -->
        <a href={{ route('pedras.create') }}
           class="px-6 py-2 rounded-lg bg-gradient-to-r from-purple-600 to-fuchsia-600
                  text-white font-semibold shadow-md hover:scale-105 transition">
            + Cadastrar Pedra
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-600 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-gray-900 rounded-xl shadow-lg">
        <table class="min-w-full text-left text-gray-200">
            <thead class="bg-gradient-to-r from-purple-800 to-fuchsia-800">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold">Imagem</th>
                    <th class="px-6 py-4 text-sm font-semibold">Nome</th>
                    <th class="px-6 py-4 text-sm font-semibold">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pedras as $pedra)
                <tr class="border-b border-purple-800 hover:bg-purple-950/40 transition">
                    <!-- Foto -->
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $pedra->imagem) }}"
                             alt="{{ $pedra->nome }}"
                             class="w-20 h-20 object-cover rounded-lg shadow-md">
                    </td>

                    <!-- Nome -->
                    <td class="px-6 py-4 text-lg font-medium text-fuchsia-300">
                        {{ $pedra->nome }}
                    </td>

                    <!-- Descrição -->
                    <td class="px-6 py-4 text-gray-300">
                        {{ $pedra->descricao }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-400">
                        Nenhuma pedra cadastrada ainda.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
