<nav class="bg-gradient-to-r from-purple-950 via-fuchsia-900 to-indigo-950 shadow-xl border-b border-purple-500/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-center items-center h-16 space-x-12">

            <!-- Link -->
            <a href={{ route('home') }}
               class="relative text-purple-300 hover:text-white text-lg font-bold tracking-widest uppercase
                      transition duration-300 group">
                Início
                <span class="absolute inset-x-0 bottom-0 h-0.5 bg-purple-500 shadow-[0_0_10px_#e879f9]
                             scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
            </a>

            <!-- Link -->
            <a href={{ route('pedras.index') }}
               class="relative text-purple-300 hover:text-white text-lg font-bold tracking-widest uppercase
                      transition duration-300 group">
                Pedras
                <span class="absolute inset-x-0 bottom-0 h-0.5 bg-purple-500 shadow-[0_0_10px_#818cf8]
                             scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
            </a>

            <!-- Link -->
            <a href={{ route('signos') }}
               class="relative text-purple-300 hover:text-white text-lg font-bold tracking-widest uppercase
                      transition duration-300 group">
                Signos
                <span class="absolute inset-x-0 bottom-0 h-0.5 bg-purple-500 shadow-[0_0_10px_#c084fc]
                             scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
            </a>
        </div>
    </div>
</nav>
