@extends('master')

@section('content')

<section class="relative bg-gradient-to-br from-black via-purple-950 to-black text-gray-200 min-h-[calc(100vh-4rem)] flex items-center">
    <div class="container mx-auto px-6 lg:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="space-y-6 animate-fade-in-left">
        <h1 class="text-5xl md:text-7xl font-bold leading-snug
                text-transparent bg-clip-text bg-gradient-to-r
                from-fuchsia-300 via-purple-400 to-indigo-400
                drop-shadow-[0_0_20px_rgba(192,132,252,0.6)]">
            A Magia das Pedras<br>em Suas Mãos
        </h1>

        <a href={{ route('pedras.index') }}
            class="inline-block px-8 py-4 text-xl font-bold text-white
                   bg-gradient-to-r from-purple-600 via-fuchsia-600 to-indigo-600
                   rounded-lg shadow-lg transform hover:scale-105 transition duration-300
                   hover:shadow-[0_0_25px_rgba(168,85,247,0.5)]
                   border border-purple-400/30">
            Conheça as pedras naturais
        </a>

    </div>

        <div class="flex justify-center md:justify-end animate-fade-in-right">
            <img src="/images/cristal-2.png" alt="Pedra Natural Mística"
                 class="w-96 md:w-[32rem] drop-shadow-[0_0_25px_rgba(168,85,247,0.8)] transform -translate-x-6 md:-translate-x-12">
        </div>
    </div>
</section>

<style>
@keyframes fade-in-left {
  from { opacity: 0; transform: translateX(-30px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes fade-in-right {
  from { opacity: 0; transform: translateX(30px); }
  to { opacity: 1; transform: translateX(0); }
}
.animate-fade-in-left {
  animation: fade-in-left 1s ease-out forwards;
}
.animate-fade-in-right {
  animation: fade-in-right 1s ease-out forwards;
}
</style>

@endsection
