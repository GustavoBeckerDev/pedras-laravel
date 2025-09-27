@extends('master')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-purple-950 to-black relative overflow-hidden">
    <!-- Efeitos de fundo -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))]
                from-purple-900/20 via-transparent to-transparent"></div>

    <div class="container mx-auto px-6 py-10 relative z-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-fuchsia-300 to-purple-300
                       bg-clip-text text-transparent drop-shadow-[0_0_10px_rgba(192,132,252,0.6)]">
                🔮 {{ $pedra->nome }}
            </h1>
            <a href="{{ route('pedras.index') }}"
               class="px-6 py-3 rounded-xl bg-gradient-to-r from-gray-700 to-gray-600
                      text-white font-semibold shadow-lg hover:scale-105 transition">
                Voltar
            </a>
        </div>

        <!-- Card principal -->
        <div class="bg-black/40 backdrop-blur-lg rounded-2xl shadow-2xl border border-purple-500/20
                    overflow-hidden ring-1 ring-purple-500/10 p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

                <!-- Imagem com efeito -->
                <div class="relative group">
                    <img src="{{ asset('storage/' . $pedra->imagem) }}"
                         alt="{{ $pedra->nome }}"
                         class="w-full rounded-2xl shadow-lg shadow-purple-500/20
                                ring-2 ring-purple-500/30 group-hover:ring-purple-400/50
                                transition-all duration-500 transform group-hover:scale-[1.02]">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-purple-900/30
                                to-transparent opacity-60 group-hover:opacity-40 transition"></div>
                </div>

                <!-- Informações -->
                <div class="space-y-6">
                    <!-- Descrição -->
                    <div>
                        <h2 class="text-xl font-semibold text-purple-300 mb-3">✨ Descrição</h2>
                        <p class="text-gray-300 leading-relaxed">
                            {{ $pedra->descricao }}
                        </p>
                    </div>

                    <!-- Form editar -->
                    <div class="bg-black/30 p-6 rounded-xl border border-purple-500/20 shadow-lg space-y-4">
                        <h3 class="text-lg font-semibold text-fuchsia-300">Editar Pedra</h3>
                        <form action="{{ route('pedras.update', $pedra->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            @method('PUT')

                            <input type="text" name="nome" value="{{ $pedra->nome }}"
                                   class="w-full p-3 rounded-lg bg-gray-900 text-white border border-purple-600
                                          focus:ring-2 focus:ring-purple-500">

                            <textarea name="descricao" rows="3"
                                      class="w-full p-3 rounded-lg bg-gray-900 text-white border border-purple-600
                                             focus:ring-2 focus:ring-purple-500">{{ $pedra->descricao }}</textarea>

                            <input type="file" name="imagem"
                                   class="block w-full text-sm text-gray-200
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-lg file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-gradient-to-r file:from-purple-600 file:to-fuchsia-600 file:text-white
                                          hover:file:shadow-md hover:file:shadow-fuchsia-500/50 transition cursor-pointer">

                            <button type="submit"
                                    class="px-6 py-3 w-full rounded-lg bg-gradient-to-r from-purple-600 to-fuchsia-600
                                           text-white font-semibold shadow-md hover:scale-105 transition cursor-pointer">
                                Salvar Alterações
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
