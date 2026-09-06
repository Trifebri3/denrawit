<section class="py-32 bg-denrawit-green text-white relative overflow-hidden border-t border-gray-800" x-data="fieldActivities()">
    <!-- Subtle Background Accent -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row gap-16 items-center">
            
            <!-- Kolom Kiri: Navigasi Jurnal -->
            <div class="md:w-1/3">
                <span class="text-denrawit-yellow font-bold uppercase tracking-widest text-sm mb-4 block">FIELD JOURNAL</span>
                <h2 class="text-4xl md:text-6xl font-serif font-bold mb-6 leading-none">Life in<br>the Field</h2>
                <p class="text-denrawit-beige font-sans text-lg mb-12 opacity-90 leading-relaxed">
                    DEN RAWIT memiliki banyak aktivitas yang menghidupkan ekosistem. Tampilan jurnal aktivitas kami dari lapangan.
                </p>
                <div class="h-px w-full bg-denrawit-beige/20 mb-8"></div>
                
                <ul class="space-y-6 font-serif text-2xl">
                    <template x-for="(item, index) in activities" :key="index">
                        <li>
                            <button 
                                @click="activeActivity = index"
                                class="flex items-center gap-6 w-full text-left transition-all duration-300 focus:outline-none group"
                            >
                                <span class="text-sm font-sans tracking-widest transition-colors duration-300" 
                                      :class="activeActivity === index ? 'text-denrawit-yellow' : 'text-gray-400 group-hover:text-denrawit-beige'" 
                                      x-text="'0' + (index + 1)"></span>
                                <span class="uppercase tracking-wide transition-all duration-300"
                                      :class="activeActivity === index ? 'text-denrawit-yellow translate-x-2' : 'text-white group-hover:text-denrawit-beige group-hover:translate-x-1'"
                                      x-text="item.title"></span>
                            </button>
                        </li>
                    </template>
                </ul>
            </div>

            <!-- Kolom Kanan: Tampilan Visual Interaktif -->
            <div class="md:w-2/3 w-full relative h-[600px] p-3 md:p-6 bg-gray-900/40 rounded-[2.5rem] border border-denrawit-beige/10 backdrop-blur-sm shadow-2xl">
                <div class="w-full h-full relative rounded-3xl overflow-hidden bg-gray-800">
                    
                    <template x-for="(item, index) in activities" :key="index">
                        <div x-show="activeActivity === index" 
                             x-transition:enter="transition ease-out duration-700"
                             x-transition:enter-start="opacity-0 scale-105"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-500 absolute inset-0"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="w-full h-full absolute inset-0"
                        >
                            <!-- Foto Aktivitas -->
                            <img :src="item.image" :alt="item.title" class="w-full h-full object-cover">
                            
                            <!-- Overlay Gelap Halus -->
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                            
                            <!-- Boks Keterangan (Kartu Berita Unik) -->
                            <div class="absolute bottom-6 left-6 right-6 md:bottom-10 md:left-10 bg-white/95 backdrop-blur-md text-gray-900 p-8 rounded-2xl max-w-lg shadow-xl border border-white/50"
                                 x-transition:enter="transition delay-300 duration-500 ease-out"
                                 x-transition:enter-start="opacity-0 translate-y-8"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="w-2 h-2 rounded-full bg-denrawit-red"></span>
                                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest" x-text="item.date"></span>
                                </div>
                                <h4 class="font-serif font-bold text-3xl mb-3" x-text="item.title"></h4>
                                <p class="text-sm font-sans text-gray-600 leading-relaxed" x-text="item.desc"></p>
                            </div>
                        </div>
                    </template>

                </div>
            </div>

        </div>
    </div>

    <!-- Data Aktivitas -->
    <script>
        function fieldActivities() {
            return {
                activeActivity: 0,
                activities: [
                    {
                        title: 'Harvest Day',
                        date: 'Setiap Akhir Bulan',
                        desc: 'Momen perayaan hasil bumi. Masyarakat berkumpul untuk memanen cabai bersama-sama, merasakan langsung hasil kerja keras dan merayakan melimpahnya anugerah alam.',
                        image: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop'
                    },
                    {
                        title: 'Field Ride',
                        date: 'Eksplorasi Akhir Pekan',
                        desc: 'Kegiatan berkuda melintasi kawasan pertanian bersama komunitas pemuda setempat. Sebuah cara unik mengembalikan semangat dan kebanggaan bertani yang menyenangkan.',
                        image: 'https://images.unsplash.com/photo-1598908314766-31a6730245a4?q=80&w=2070&auto=format&fit=crop'
                    },
                    {
                        title: 'Farm Table',
                        date: 'Sajian Langsung dari Kebun',
                        desc: 'Makan malam panjang di tengah ladang. Kami mengolah hasil panen hari itu menjadi hidangan lezat, dinikmati bersama sembari bertukar cerita di bawah bintang.',
                        image: 'https://images.unsplash.com/photo-1544376798-89aa6b82c6cd?q=80&w=1974&auto=format&fit=crop'
                    },
                    {
                        title: 'Youth Field Trip',
                        date: 'Edukasi Generasi Muda',
                        desc: 'Mengundang anak-anak sekolah dan mahasiswa untuk turun ke tanah. Mereka belajar tentang siklus tanam, inovasi alat pertanian, dan bagaimana pangan mereka berasal.',
                        image: 'https://images.unsplash.com/photo-1589824783837-6169289d00b4?q=80&w=2070&auto=format&fit=crop'
                    },
                    {
                        title: 'Community Day',
                        date: 'Pasar & Lokakarya',
                        desc: 'Hari di mana batas antara kebun dan desa membaur. Digelar pasar hasil panen murah, lokakarya kerajinan desa, dan panggung kesenian lokal yang menyatukan semua pihak.',
                        image: 'https://images.unsplash.com/photo-1529156069898-49953eb1b5b4?q=80&w=1974&auto=format&fit=crop'
                    }
                ]
            }
        }
    </script>
</section>
