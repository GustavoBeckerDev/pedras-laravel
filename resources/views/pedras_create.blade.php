@extends('master')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-purple-400 mb-6">✨ Cadastrar Nova Pedra</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-600 text-white rounded">
            <ul class="list-disc ml-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action={{ route('pedras.store') }} method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Nome -->
        <div>
            <label class="block text-gray-300 mb-1">Nome da Pedra</label>
            <input type="text" name="nome" value="{{ old('nome') }}"
                   class="w-full p-3 rounded bg-gray-800 text-white focus:ring-2 focus:ring-purple-500">
        </div>

        <div>
            <label class="block text-gray-300 mb-1">Descrição</label>
            <textarea name="descricao" rows="4"
                      class="w-full p-3 rounded bg-gray-800 text-white focus:ring-2 focus:ring-purple-500">{{ old('descricao') }}</textarea>
        </div>

        <div>
            <label class="block text-gray-300 mb-1">Imagem da Pedra</label>
            <input type="file" name="imagem" class="w-full text-gray-200">
        </div>

        <div class="flex space-x-4">
            <button type="submit"
                    class="px-6 py-3 rounded-lg bg-gradient-to-r from-purple-600 to-fuchsia-600
                           text-white font-semibold shadow-md hover:scale-105 transition">
                Salvar Pedra
            </button>

            <a href={{ route('pedras.index') }}
               class="px-6 py-3 rounded-lg bg-gray-700 text-gray-200 hover:bg-gray-600 transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
