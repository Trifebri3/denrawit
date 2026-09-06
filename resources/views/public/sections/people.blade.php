<section class="py-32 bg-denrawit-beige border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-denrawit-red font-bold uppercase tracking-widest text-sm mb-4 block">10 — Meet The People</span>
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">
                Inti kami bukan cabainya. <br/><span class="italic font-light">Manusianya.</span>
            </h2>
        </div>

        <div x-data="{ currentSlide: 0, slides: [
            { name: 'Bapak Suryana', category: 'Petani Senior', quote: 'Tanah yang dirawat tak akan pernah ingkar janji.', story: 'Selama 30 tahun bertani konvensional, lahan Pak Suryana sempat rusak karena bahan kimia. Sejak bergabung dengan DEN RAWIT dan menerapkan metode regeneratif, tanahnya kembali gembur dan hasil panen cabainya kini lebih tahan terhadap cuaca ekstrem.', profileImg: 'https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2071&auto=format&fit=crop', activityImg: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop', url: '#' },
            { name: 'Dinda Ayu', category: 'Youth Agripreneur', quote: 'Bertani itu keren, asalkan kita tahu mengemasnya.', story: 'Lulusan manajemen yang memilih kembali ke desa. Dinda menginisiasi pembuatan saus cabai fermentasi organik dari sisa panen cabai yang kurang sempurna bentuknya. Kini produknya mengurangi food waste dan membuka lapangan kerja.', profileImg: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop', activityImg: 'https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1974&auto=format&fit=crop', url: '#' },
            { name: 'Ibu Marni', category: 'Ibu Rumah Tangga / KWT', quote: 'Dari tangan perempuan desa, mutu hasil bumi terjaga.', story: 'Ibu Marni memimpin Kelompok Wanita Tani (KWT) yang mengatur proses sortasi dan quality control pasca panen. Ketelitian sistem yang dibangunnya berhasil menekan angka kerusakan cabai hingga 70%.', profileImg: 'https://images.unsplash.com/photo-1589824783837-6169289d00b4?q=80&w=2070&auto=format&fit=crop', activityImg: 'https://images.unsplash.com/photo-1596700085449-93e5a5078508?q=80&w=2070&auto=format&fit=crop', url: '#' }
        ] }" class="relative max-w-5xl mx-auto">
            
            <!-- Slider Container -->
            <div class="overflow-hidden relative">
                <div class="flex transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
                    
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="w-full flex-shrink-0 flex flex-col md:flex-row items-center">
                            
                            <!-- Kiri: Foto Profil dengan Gradasi -->
                            <div class="w-full md:w-1/2 relative h-[500px]">
                                <img :src="slide.profileImg" :alt="slide.name" class="w-full h-full object-cover">
                                <!-- Gradasi Transisi ke Kanan (Warna Beige) -->
                                <div class="absolute inset-y-0 right-0 w-1/3 bg-gradient-to-l from-denrawit-beige to-transparent"></div>
                                <!-- Gradasi Transisi ke Bawah (Warna Beige) untuk Mobile -->
                                <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-denrawit-beige to-transparent md:hidden"></div>
                                
                                <div class="absolute top-8 left-8 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-bold text-gray-900 uppercase tracking-widest shadow-sm" x-text="slide.category"></div>
                            </div>
                            
                            <!-- Kanan: Cerita & Foto Aktivitas -->
                            <div class="w-full md:w-1/2 p-8 md:p-16 flex flex-col justify-center">
                                <h4 class="font-serif font-bold text-3xl md:text-5xl text-gray-900 mb-6" x-text="slide.name"></h4>
                                <p class="font-serif italic text-3xl text-denrawit-red mb-8 leading-snug" x-text="'&quot;' + slide.quote + '&quot;'"></p>
                                <p class="font-sans text-gray-700 text-lg leading-relaxed mb-10" x-text="slide.story"></p>
                                
                                <div>
                                    <div class="h-40 w-full md:w-4/5 rounded-2xl overflow-hidden mb-6 relative group shadow-lg">
                                        <img :src="slide.activityImg" alt="Aktivitas" class="w-full h-full object-cover filter brightness-90 group-hover:brightness-100 group-hover:scale-105 transition-all duration-500">
                                        <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-colors duration-500"></div>
                                    </div>
                                    
                                    <a :href="slide.url" class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-gray-900 hover:text-denrawit-green transition-colors">
                                        Baca Cerita Lengkap <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </template>
                    
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="flex items-center justify-center gap-6 mt-8">
                <button @click="currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1" class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-gray-900 hover:text-gray-900 transition-colors focus:outline-none">
                    <span class="sr-only">Previous slide</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <div class="flex gap-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="currentSlide = index" :class="{'bg-gray-900 w-8': currentSlide === index, 'bg-gray-300 w-3': currentSlide !== index}" class="h-3 rounded-full transition-all duration-300 focus:outline-none">
                            <span class="sr-only">Go to slide <span x-text="index + 1"></span></span>
                        </button>
                    </template>
                </div>
                <button @click="currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0" class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-gray-900 hover:text-gray-900 transition-colors focus:outline-none">
                    <span class="sr-only">Next slide</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </div>
    </div>
</section>
