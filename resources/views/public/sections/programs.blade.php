<section id="program" class="py-32 bg-denrawit-beige relative" x-data="programJourney()">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Newspaper Header -->
        <div class="border-b-2 border-gray-900 pb-6 mb-12 flex flex-col md:flex-row justify-between items-end">
            <div>
                <span class="text-denrawit-green font-bold uppercase tracking-widest text-sm mb-2 block">THE DEN RAWIT CHRONICLE</span>
                <h2 class="text-3xl md:text-6xl font-serif font-black text-gray-900 uppercase tracking-tighter leading-none">
                    Turning Ideas<br>Into Action.
                </h2>
            </div>
            <div class="text-right mt-6 md:mt-0 max-w-sm">
                <p class="text-lg text-gray-700 font-sans italic">
                    Setiap program adalah jejak langkah nyata. Temukan di mana kami bergerak, dan apa dampaknya bagi ekosistem.
                </p>
            </div>
        </div>

        <!-- Editorial Layout: 2 Columns -->
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Kolom Kiri: Daftar Program (Headlines) -->
            <div class="w-full lg:w-1/3 flex flex-col gap-0 border-t border-gray-300">
                <template x-for="program in programs" :key="program.id">
                    <button 
                        @click="activeId = program.id"
                        class="text-left py-6 border-b border-gray-300 transition-all duration-300 group focus:outline-none"
                        :class="activeId === program.id ? 'pl-4 border-l-4 border-l-denrawit-red bg-white/50' : 'hover:bg-white/30'"
                    >
                        <span class="text-xs font-bold uppercase tracking-widest mb-2 block transition-colors" :class="activeId === program.id ? 'text-denrawit-red' : 'text-gray-500 group-hover:text-gray-900'" x-text="program.category"></span>
                        <h3 class="font-serif font-bold text-2xl md:text-3xl transition-colors" :class="activeId === program.id ? 'text-gray-900' : 'text-gray-600 group-hover:text-gray-900'" x-text="program.title"></h3>
                    </button>
                </template>
            </div>

            <!-- Kolom Kanan: Detail Program & Activity Journey -->
            <div class="w-full lg:w-2/3 bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100 relative overflow-hidden">
                <template x-for="program in programs" :key="program.id">
                    <div x-show="activeId === program.id" x-transition.opacity.duration.500ms class="flex flex-col gap-10" x-data="{ showJourney: false, activeTimelineIdx: null }">
                        
                        <!-- Header Detail -->
                        <div>
                            <div class="flex flex-wrap md:flex-nowrap justify-between items-start mb-6 gap-4">
                                <h3 class="text-3xl md:text-5xl font-serif font-bold text-gray-900" x-text="program.title"></h3>
                                <div class="flex flex-wrap gap-2 items-center shrink-0">
                                    <button @click="showJourney = true" class="bg-white text-gray-900 hover:text-white hover:bg-denrawit-red px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest border border-gray-200 transition-colors shadow-sm flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                        Lihat Activity
                                    </button>
                                    <span class="bg-gray-100 text-gray-900 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest border border-gray-200 shrink-0" x-text="program.impact"></span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-700 font-sans leading-relaxed" x-text="program.description"></p>
                        </div>

                        <!-- Gambar Utama -->
                        <div class="w-full h-64 md:h-80 rounded-2xl overflow-hidden relative">
                            <img :src="program.image" :alt="program.title" class="w-full h-full object-cover">
                            <div class="absolute inset-0 border border-gray-900/10 rounded-2xl pointer-events-none"></div>
                        </div>

                        <!-- Modal Activity Journey (Kaya Peta) -->
                        <template x-teleport="body">
                            <div x-show="showJourney" 
                                 style="display: none;"
                                 class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900/80 backdrop-blur-sm p-4 md:p-8"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">
                                 
                                <div class="bg-denrawit-beige w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-3xl shadow-2xl relative p-8 md:p-12"
                                     x-show="showJourney"
                                     @click.away="showJourney = false"
                                     x-transition:enter="transition ease-out duration-300 delay-100"
                                     x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                                     x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                                    
                                    <!-- Close Button -->
                                    <button @click="showJourney = false" class="absolute top-6 right-6 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-100 transition-colors text-gray-900">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>

                                    <div class="mb-8">
                                        <span class="text-denrawit-red font-bold uppercase tracking-widest text-xs mb-2 block" x-text="program.title"></span>
                                        <h4 class="font-serif font-bold text-2xl md:text-4xl text-gray-900 border-b-2 border-gray-900 pb-4 inline-block">Peta Aktivitas</h4>
                                    </div>
                                    
                                    <!-- Interactive Timeline Map -->
                                    <div class="relative border-l-4 border-gray-300 ml-4 pl-10 flex flex-col gap-12 mt-12">
                                        <template x-for="(activity, index) in program.activities" :key="index">
                                            <div class="relative">
                                                <!-- Timeline Dot (Clickable Marker) -->
                                                <button @click="activeTimelineIdx = activeTimelineIdx === index ? null : index" 
                                                        class="absolute w-8 h-8 bg-white border-4 rounded-full -left-[58px] -top-1 focus:outline-none transition-all duration-300 z-10 shadow-md flex items-center justify-center group hover:scale-110"
                                                        :class="activeTimelineIdx === index ? 'border-denrawit-red scale-110' : 'border-gray-900 hover:border-denrawit-red'">
                                                    <div class="w-2 h-2 rounded-full transition-colors" :class="activeTimelineIdx === index ? 'bg-denrawit-red' : 'bg-gray-900 group-hover:bg-denrawit-red'"></div>
                                                </button>
                                                
                                                <!-- Title -->
                                                <button @click="activeTimelineIdx = activeTimelineIdx === index ? null : index" 
                                                        class="text-left group focus:outline-none w-full bg-white/50 p-4 rounded-2xl hover:bg-white transition-colors border border-transparent hover:border-gray-200">
                                                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 block flex items-center gap-2">
                                                        <svg class="w-3 h-3 text-denrawit-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                        <span x-text="activity.date"></span>
                                                    </span>
                                                    <h5 class="text-lg md:text-2xl font-serif font-bold transition-colors"
                                                        :class="activeTimelineIdx === index ? 'text-denrawit-red' : 'text-gray-900 group-hover:text-denrawit-red'" 
                                                        x-text="activity.name"></h5>
                                                </button>

                                                <!-- Popup Detail (Map Style Popup) -->
                                                <div x-show="activeTimelineIdx === index" 
                                                     x-transition:enter="transition ease-out duration-300"
                                                     x-transition:enter-start="opacity-0 translate-y-4"
                                                     x-transition:enter-end="opacity-100 translate-y-0"
                                                     x-transition:leave="transition ease-in duration-200"
                                                     x-transition:leave-start="opacity-100 translate-y-0"
                                                     x-transition:leave-end="opacity-0 translate-y-4"
                                                     class="mt-4 bg-white p-4 md:p-6 rounded-2xl shadow-xl border border-gray-200 relative z-20 before:content-[''] before:absolute before:-top-4 before:left-8 before:border-8 before:border-transparent before:border-b-white filter drop-shadow-lg ml-0 md:ml-4">
                                                    
                                                    <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                                                        <!-- Foto Aktivitas -->
                                                        <div class="w-full md:w-48 h-40 md:h-auto rounded-xl overflow-hidden shrink-0 bg-gray-100">
                                                            <img :src="activity.image" :alt="activity.name" class="w-full h-full object-cover">
                                                        </div>
                                                        
                                                        <!-- Detail Konten -->
                                                        <div class="flex-1 flex flex-col justify-between">
                                                            <div>
                                                                <div class="flex items-center gap-2 text-sm text-gray-600 font-medium mb-4 md:mb-6">
                                                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-denrawit-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                                    <span x-text="activity.location"></span>
                                                                </div>
                                                                
                                                                <div class="bg-gray-50 px-4 py-3 md:px-6 md:py-4 rounded-xl border border-gray-200 w-full mb-4 md:mb-6">
                                                                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-1 md:mb-2">Dampak Nyata</span>
                                                                    <p class="text-sm md:text-base font-bold text-denrawit-green leading-tight" x-text="activity.impact"></p>
                                                                </div>
                                                            </div>

                                                            <a href="/publication/detail-kegiatan" class="text-xs font-bold text-white bg-gray-900 hover:bg-denrawit-red transition-colors px-6 py-3 rounded-full inline-flex items-center justify-center gap-2 shadow-sm w-full md:w-fit">
                                                                Baca Cerita Lengkap
                                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>
                </template>
            </div>
            
        </div>
    </div>

    <!-- Script Alpine Component Data -->
    <script>
        function programJourney() {
            return {
                activeId: 1,
                programs: [
                    {
                        id: 1,
                        category: '01 / People',
                        title: 'Jaminan Kesehatan Petani',
                        impact: '150+ Keluarga Terbantu',
                        description: 'Petani yang sehat adalah fondasi pertanian yang berkelanjutan. Program ini memastikan akses, edukasi, dan fasilitas kesehatan memadai bagi komunitas petani.',
                        image: 'https://images.unsplash.com/photo-1596700085449-93e5a5078508?q=80&w=2070&auto=format&fit=crop',
                        activities: [
                            { date: 'Agustus 2026', name: 'Pemeriksaan Kesehatan Gratis & Cek Gizi', location: 'Balai Desa Sukamaju', impact: 'Melayani 75 keluarga petani', image: 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1780&auto=format&fit=crop' },
                            { date: 'Juli 2026', name: 'Distribusi Suplemen Herbal Organik', location: 'Desa Cibodas', impact: '200 paket vitamin tersalurkan', image: 'https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?q=80&w=1974&auto=format&fit=crop' },
                            { date: 'Mei 2026', name: 'Edukasi K3 (Keselamatan Kerja Pertanian)', location: 'Saung Tani Mekarjaya', impact: 'Dihadiri 40 petani penggarap', image: 'https://images.unsplash.com/photo-1599940824399-b87987ceb72a?q=80&w=1927&auto=format&fit=crop' }
                        ]
                    },
                    {
                        id: 2,
                        category: '02 / Youth × Profit',
                        title: 'Young Agri Movement',
                        impact: '240 Pemuda Terlibat',
                        description: 'Making Agriculture Cool Again. Membuka ruang bagi generasi muda untuk mengenal pertanian melalui teknologi, inovasi produk, dan model bisnis modern.',
                        image: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop',
                        activities: [
                            { date: 'Agustus 2026', name: 'Workshop Digital Marketing Hasil Bumi', location: 'Creative Hub Garut', impact: 'Lulusan 50 pemuda desa', image: 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop' },
                            { date: 'Juni 2026', name: 'Peluncuran Startup Agri-Tech Lokal', location: 'Kampus Universitas Padjadjaran', impact: 'Pendanaan awal Rp 50 Juta', image: 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=2070&auto=format&fit=crop' }
                        ]
                    },
                    {
                        id: 3,
                        category: '03 / Planet',
                        title: 'Regenerative Farming',
                        impact: '15 Hektar Lahan',
                        description: 'Grow Food. Regenerate Soil. Mengeksplorasi dan menerapkan praktik pertanian yang memulihkan unsur hara tanah dan meningkatkan biodiversitas ekosistem lokal.',
                        image: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop',
                        activities: [
                            { date: 'September 2026', name: 'Panen Perdana Cabai Bebas Pestisida', location: 'Blok Sawah Leles', impact: 'Hasil panen tahan cuaca 30%', image: 'https://images.unsplash.com/photo-1581403067756-3392477161b9?q=80&w=2070&auto=format&fit=crop' },
                            { date: 'April 2026', name: 'Pembuatan Pupuk Kompos Massal', location: 'Pusat Daur Ulang Desa', impact: 'Mengolah 2 ton limbah organik', image: 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=2070&auto=format&fit=crop' }
                        ]
                    },
                    {
                        id: 4,
                        category: '04 / Profit × Product',
                        title: 'Farmer Entrepreneurship',
                        impact: '12 Produk Inovasi',
                        description: 'Mendorong petani melihat peluang ekonomi yang lebih luas dengan memotong rantai pasok: dari produksi, pengolahan, hingga langsung menembus pasar premium.',
                        image: 'https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1974&auto=format&fit=crop',
                        activities: [
                            { date: 'Juli 2026', name: 'Rilis Produk Saus Cabai Fermentasi', location: 'Pasar Modern Bandung', impact: 'Omzet mencapai Rp 20 Jt/Bulan', image: 'https://images.unsplash.com/photo-1599387737222-3580436f5f3e?q=80&w=2070&auto=format&fit=crop' },
                            { date: 'Februari 2026', name: 'Pelatihan Packaging & Branding', location: 'Dinas Koperasi Kab. Garut', impact: '3 Kelompok Tani punya merek', image: 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?q=80&w=2070&auto=format&fit=crop' }
                        ]
                    }
                ]
            }
        }
    </script>
</section>
