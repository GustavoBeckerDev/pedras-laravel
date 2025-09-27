@extends('master')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-black via-purple-950 to-black relative overflow-hidden">
    <!-- Efeitos místicos de fundo -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-900/20 via-transparent to-transparent"></div>
    <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iYSIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cmVjdCB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9Im5vbmUiLz48Y2lyY2xlIGN4PSIyMCIgY3k9IjIwIiByPSIxIiBmaWxsPSJyZ2JhKDE0NywgNTEsIDIzNCwgMC4xKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNhKSIvPjwvc3ZnPg==')] opacity-30"></div>

    <div class="container mx-auto px-6 py-10 relative z-10">
        <!-- Header com botão -->
        <div class="flex flex-col sm:flex-row justify-center items-center mb-8">
            <!-- Botão Cadastrar Pedra -->
            <a href="{{ route('pedras.create') }}"
               class="group flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 via-fuchsia-600 to-purple-800
                      text-white font-semibold shadow-lg shadow-purple-500/25 hover:shadow-purple-500/40 hover:scale-105
                      transition-all duration-300 transform backdrop-blur-sm">
                <span class="bg-gradient-to-r from-fuchsia-300 via-purple-400 to-indigo-400 bg-clip-text text-transparent">
                    <x-emoji-crystal-ball class="w-6 h-6 drop-shadow-[0_0_8px_rgba(192,132,252,0.7)]" />
                </span>
                Cadastrar Pedra
            </a>
        </div>

        <!-- Tabela ou Cards para mobile -->
        <div class="bg-black/40 backdrop-blur-lg rounded-2xl shadow-2xl border border-purple-500/20 overflow-hidden
                    ring-1 ring-purple-500/10">

            <!-- Versão Desktop - Tabela -->
            <div class="hidden md:block overflow-x-auto">
                <table class="min-w-full text-left text-gray-200">
                    <thead class="bg-gradient-to-r from-purple-900/80 via-fuchsia-900/80 to-purple-900/80 backdrop-blur-sm">
                        <tr>
                            <th class="px-6 py-5 text-sm font-semibold uppercase tracking-wider text-purple-200">Imagem</th>
                            <th class="px-6 py-5 text-sm font-semibold uppercase tracking-wider text-purple-200">Nome</th>
                            <th class="px-6 py-5 text-sm font-semibold uppercase tracking-wider text-purple-200">Descrição</th>
                            <th class="px-6 py-5 text-sm font-semibold uppercase tracking-wider text-center text-purple-200">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-purple-800/20">
                        @forelse($pedras as $pedra)
                        <tr class="hover:bg-purple-900/20 transition-all duration-300 group backdrop-blur-sm">
                            <!-- Foto -->
                            <td class="px-6 py-6">
                                <div class="relative w-24 h-24">
                                    <img src="{{ asset('storage/' . $pedra->imagem) }}"
                                        alt="{{ $pedra->nome }}"
                                        class="w-24 h-24 object-cover rounded-xl shadow-lg shadow-purple-500/20 ring-2 ring-purple-500/20
                                                group-hover:ring-purple-400/40 group-hover:shadow-purple-400/30 transition-all duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/20 to-transparent rounded-xl"></div>
                                </div>
                            </td>

                        <!-- Nome -->
                        <td class="px-6 py-6">
                            <div class="text-xl font-bold bg-gradient-to-r from-fuchsia-300 to-purple-300 bg-clip-text text-transparent">
                                {{ $pedra->nome }}
                            </div>
                        </td>

                        <!-- Descrição -->
                        <td class="px-6 py-6 max-w-xs">
                            <p class="text-gray-300 line-clamp-3 leading-relaxed">
                                {{ Str::limit($pedra->descricao, 120) }}
                            </p>
                        </td>

                        <!-- Ações -->
                        <td class="px-6 py-6 text-center">
                            <div class="flex justify-center items-center space-x-4">

                                <!-- Editar -->
                                <a href="{{ route('pedras.show', $pedra->id) }}"
                                   class="group/btn p-2 rounded-xl bg-purple-600/20 hover:bg-purple-600/40
                                          transition-all duration-300 hover:scale-110"
                                   title="Editar">
                                    <svg class="w-5 h-5 text-purple-400 group-hover/btn:text-purple-300 transition-colors"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <!-- Deletar -->
                                <form method="POST" action="{{ route('pedras.destroy', $pedra->id) }}"
                                      class="inline-block"
                                      onsubmit="return confirm('Tem certeza que deseja excluir esta pedra?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="group/btn p-2 rounded-xl bg-red-600/20 hover:bg-red-600/40
                                                   transition-all duration-300 hover:scale-110 cursor-pointer"
                                            title="Excluir">
                                        <svg class="w-5 h-5 text-red-400 group-hover/btn:text-red-300 transition-colors"
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-20 text-center">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <div class="w-20 h-20 bg-purple-900/30 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-300 mb-2">Nenhuma pedra encontrada</h3>
                                    <p class="text-gray-400 mb-4">Cadastre sua primeira pedra para começar</p>
                                    <a href="{{ route('pedras.create') }}"
                                       class="inline-flex items-center gap-2 px-4 py-2 bg-purple-600 hover:bg-purple-700
                                              text-white rounded-lg transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Cadastrar Primeira Pedra
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Versão Mobile - Cards -->
        <div class="md:hidden p-4 space-y-4">
            @forelse($pedras as $pedra)
                <div class="bg-black/30 backdrop-blur-sm rounded-xl p-6 border border-purple-500/30
                            hover:border-purple-400/50 hover:bg-black/40 transition-all duration-300
                            shadow-lg shadow-purple-500/10">
                    <div class="flex items-start space-x-4">
                        <!-- Imagem -->
                        <img src="{{ asset('storage/' . $pedra->imagem) }}"
                             alt="{{ $pedra->nome }}"
                             class="w-20 h-20 object-cover rounded-lg shadow-lg shadow-purple-500/20
                                    ring-2 ring-purple-500/20">

                        <!-- Conteúdo -->
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-bold bg-gradient-to-r from-fuchsia-300 via-purple-300 to-pink-300
                                       bg-clip-text text-transparent mb-2">
                                {{ $pedra->nome }}
                            </h3>
                            <p class="text-gray-300 text-sm mb-4 line-clamp-2">
                                {{ Str::limit($pedra->descricao, 80) }}
                            </p>

                            <!-- Ações Mobile -->
                            <div class="flex space-x-3">
                                <a href="{{ route('pedras.show', $pedra->id) }}"
                                   class="flex-1 bg-blue-600/20 hover:bg-blue-600/30 text-blue-300 text-center py-2 px-3
                                          rounded-lg text-sm transition-colors border border-blue-500/20">
                                    Ver
                                </a>
                                <a href="{{ route('pedras.edit', $pedra->id) }}"
                                   class="flex-1 bg-purple-600/20 hover:bg-purple-600/30 text-purple-300 text-center py-2 px-3
                                          rounded-lg text-sm transition-colors border border-purple-500/20">
                                    Editar
                                </a>
                                <form method="POST" action="{{ route('pedras.destroy', $pedra->id) }}" class="flex-1"
                                      onsubmit="return confirm('Tem certeza?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="w-full bg-red-600/20 hover:bg-red-600/30 text-red-300 py-2 px-3
                                                   rounded-lg text-sm transition-colors border border-red-500/20">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <div class="w-16 h-16 bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4
                                ring-2 ring-purple-500/20 shadow-lg shadow-purple-500/20">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-200 mb-2">Nenhuma pedra encontrada</h3>
                    <p class="text-gray-400 mb-4">Cadastre sua primeira pedra para começar</p>
                    <a href="{{ route('pedras.create') }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-purple-600 to-fuchsia-600
                              hover:from-purple-700 hover:to-fuchsia-700 text-white rounded-lg transition-all duration-300
                              shadow-lg shadow-purple-500/25">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Cadastrar Primeira Pedra
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Paginação (se usando paginate()) -->
    @if(method_exists($pedras, 'links'))
        <div class="mt-8">
            {{ $pedras->links() }}
        </div>
    @endif
</div>

@endsection
