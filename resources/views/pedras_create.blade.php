@extends('master')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-purple-950 to-black relative overflow-hidden">
    <!-- Fundo místico -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-900/20 via-transparent to-transparent"></div>

    <div class="container mx-auto px-6 py-16 relative z-10 flex justify-center">
        <!-- Card -->
        <div class="w-full max-w-3xl bg-black/40 backdrop-blur-lg border border-purple-500/30 rounded-2xl shadow-2xl p-10 space-y-8
                    ring-1 ring-purple-500/10 shadow-purple-900/30 hover:shadow-purple-700/40 transition-all duration-500">

            <!-- Título -->
            <h1 class="text-3xl font-bold text-center bg-gradient-to-r from-fuchsia-300 via-purple-300 to-indigo-300
                       bg-clip-text text-transparent drop-shadow-[0_0_10px_rgba(192,132,252,0.6)]">
                ✨ Cadastre Sua Pedra ✨
            </h1>

            <!-- Erros -->
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-600/80 text-white rounded-lg shadow-md shadow-red-900/50">
                    <ul class="list-disc ml-4 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('pedras.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Nome -->
                <div>
                    <label class="block text-purple-200 font-semibold mb-2">Nome da Pedra</label>
                    <input type="text" name="nome" value="{{ old('nome') }}"
                           class="w-full p-3 rounded-lg bg-gray-900/70 border border-purple-700/30 text-white
                                  placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-fuchsia-500 focus:border-fuchsia-500 transition">
                </div>

                <!-- Descrição -->
                <div>
                    <label class="block text-purple-200 font-semibold mb-2">Descrição</label>
                    <textarea name="descricao" rows="4"
                              class="w-full p-3 rounded-lg bg-gray-900/70 border border-purple-700/30 text-white
                                     placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-fuchsia-500 focus:border-fuchsia-500 transition">{{ old('descricao') }}</textarea>
                </div>

                <!-- Upload Imagem -->
                <div>
                    <label class="block text-purple-200 font-semibold mb-2">Imagem da Pedra</label>
                    <input type="file" name="imagem"
                           class="block w-full text-sm text-gray-200
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-gradient-to-r file:from-purple-600 file:to-fuchsia-600 file:text-white
                                  hover:file:shadow-lg hover:file:shadow-fuchsia-500/40
                                  transition cursor-pointer">
                </div>

                <!-- Botões -->
                <div class="flex justify-center space-x-4 pt-4">
                    <button type="submit"
                            class="flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 via-fuchsia-600 to-purple-800
                                   text-white font-semibold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40 hover:scale-105
                                   transition-all duration-300 cursor-pointer">
                        <x-emoji-crystal-ball class="w-5 h-5 text-fuchsia-300 drop-shadow-[0_0_8px_rgba(236,72,153,0.7)]" />
                        Salvar Pedra
                    </button>

                    <a href="{{ route('pedras.index') }}"
                       class="px-6 py-3 rounded-xl bg-gray-800/80 text-gray-300 font-medium border border-gray-700
                              hover:bg-gray-700/80 hover:text-white transition-all">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
