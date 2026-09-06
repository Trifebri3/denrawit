<section class="py-16 bg-white border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Section Header -->
        <div class="flex justify-between items-end mb-10">
            <div>
                <span class="text-denrawit-yellow font-bold uppercase tracking-widest text-sm mb-2 block">Latest Updates</span>
                <h2 class="text-3xl font-serif font-bold text-gray-900">Kabar dari Kebun</h2>
            </div>
            <a href="#" class="hidden md:inline-flex text-sm font-bold uppercase tracking-widest text-denrawit-green hover:text-denrawit-red transition-colors">
                Lihat Semua Berita &rarr;
            </a>
        </div>

        <!-- Alpine.js Auto-Slider -->
        <div 
            x-data="{ 
                activeSlide: 0, 
                slides: [
                    {
                        title: 'Pelatihan Pertanian Regeneratif di Garut Selatan',
                        image: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop',
                        date: '12 Sep 2026',
                        category: 'PROGRAM'
                    },
                    {
                        title: 'Pemuda Tani DEN RAWIT Kembangkan Bibit Unggul',
                        image: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop',
                        date: '08 Sep 2026',
                        category: 'YOUTH'
                    },
                    {
                        title: 'Pasar Rakyat: Menghubungkan Petani dan Konsumen',
                        image: 'https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1974&auto=format&fit=crop',
                        date: '02 Sep 2026',
                        category: 'COMMUNITY'
                    }
                ],
                next() {
                    this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1
                },
                init() {
                    setInterval(() => { this.next() }, 5000)
                }
            }" 
            class="relative overflow-hidden w-full h-[400px] md:h-[500px] group bg-gray-100"
        >
            <!-- Slider Track -->
            <div class="relative w-full h-full">
                <template x-for="(slide, index) in slides" :key="index">
                    <div 
                        x-show="activeSlide === index"
                        x-transition:enter="transition ease-out duration-700 transform"
                        x-transition:enter-start="translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        x-transition:leave="transition ease-in duration-700 transform absolute top-0 left-0"
                        x-transition:leave-start="translate-x-0 opacity-100"
                        x-transition:leave-end="-translate-x-full opacity-0"
                        class="w-full h-full absolute inset-0 cursor-pointer"
                    >
                        <!-- Banner Image -->
                        <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-1000">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute bottom-0 left-0 w-full p-8 md:p-12">
                            <div class="flex items-center gap-4 mb-4">
                                <span class="bg-denrawit-yellow text-gray-900 px-3 py-1 text-xs font-bold tracking-widest uppercase" x-text="slide.category"></span>
                                <span class="text-white text-sm font-sans" x-text="slide.date"></span>
                            </div>
                            <h3 class="text-2xl md:text-4xl font-serif font-bold text-white mb-6 leading-tight max-w-3xl" x-text="slide.title"></h3>
                            <button class="inline-flex items-center gap-2 text-white font-bold uppercase tracking-widest text-sm hover:text-denrawit-yellow transition-colors">
                                Baca Selengkapnya &rarr;
                            </button>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Dots Indicator -->
            <div class="absolute bottom-8 right-8 flex gap-3 z-20">
                <template x-for="(slide, index) in slides" :key="index">
                    <button 
                        @click="activeSlide = index"
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="activeSlide === index ? 'bg-denrawit-yellow scale-125' : 'bg-white/50 hover:bg-white'"
                    ></button>
                </template>
            </div>
        </div>

        <a href="#" class="md:hidden mt-6 block text-center text-sm font-bold uppercase tracking-widest text-denrawit-green border border-denrawit-green py-3 hover:bg-denrawit-green hover:text-white transition-colors">
            Lihat Semua Berita
        </a>

    </div>
</section>
