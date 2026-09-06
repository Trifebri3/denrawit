<section id="home" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <!-- Cinematic Montage Background (Local Video) -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-gray-900">
        <!-- Deep overlay to ensure text is perfectly readable -->
        <div class="absolute inset-0 bg-gray-900/60 z-10"></div>
        <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-80 pointer-events-none">
            <source src="{{ asset('hero.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="relative z-20 w-full max-w-5xl mx-auto px-6 md:px-4 text-center">
        <h2 class="text-xs md:text-base tracking-widest font-sans font-bold text-denrawit-yellow mb-6 uppercase drop-shadow-md">
            Pertanian Bukan Masa Lalu. Pertanian Adalah Masa Depan.
        </h2>
        
        <h1 class="text-4xl md:text-7xl lg:text-8xl font-serif font-bold text-white mb-6 leading-tight drop-shadow-lg">
            We grow more <br/> than chili.
        </h1>
        
        <p class="text-sm md:text-xl font-sans text-gray-200 max-w-2xl mx-auto mb-8 md:mb-10 leading-relaxed drop-shadow-md">
            DEN RAWIT adalah gerakan yang mempertemukan anak muda, petani, komunitas, alam, dan inovasi untuk membangun ekosistem pertanian cabai yang lebih regeneratif dan berkelanjutan.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-3 md:gap-6 mb-12 drop-shadow-md">
            <span class="text-xs md:text-sm font-bold tracking-widest uppercase text-white">People.</span>
            <span class="w-1.5 h-1.5 rounded-full bg-denrawit-yellow hidden sm:inline-block"></span>
            <span class="text-xs md:text-sm font-bold tracking-widest uppercase text-white">Planet.</span>
            <span class="w-1.5 h-1.5 rounded-full bg-denrawit-yellow hidden sm:inline-block"></span>
            <span class="text-xs md:text-sm font-bold tracking-widest uppercase text-white">Profit.</span>
            <span class="w-1.5 h-1.5 rounded-full bg-denrawit-yellow hidden sm:inline-block"></span>
            <span class="text-xs md:text-sm font-bold tracking-widest uppercase text-white">Product.</span>
        </div>

        <a href="#about" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white rounded-full text-sm md:text-base font-bold text-white hover:bg-white hover:text-gray-900 transition-all duration-300 shadow-md">
            [ EXPLORE DEN RAWIT ]
        </a>
    </div>
</section>
