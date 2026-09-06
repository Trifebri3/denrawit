<section class="py-32 bg-denrawit-beige relative" x-data="calendarEvents()">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="mb-12">
            <span class="text-denrawit-red font-bold uppercase tracking-widest text-xs mb-2 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                AGENDA KEGIATAN LAPANGAN
            </span>
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 max-w-2xl leading-tight">
                Kalender Edukasi & Pemberdayaan Juni 2026
            </h2>
        </div>

        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Kolom Kiri: Kalender Interaktif -->
            <div class="w-full lg:w-1/2 bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <div class="flex justify-between items-center mb-8 border-b border-gray-100 pb-4">
                    <h3 class="font-serif font-bold text-xl text-gray-900">Juni 2026</h3>
                    <span class="text-xs text-gray-400 font-sans italic">Klik hari bertitik untuk info agenda</span>
                </div>
                
                <!-- Grid Kalender -->
                <div class="grid grid-cols-7 gap-2 text-center">
                    <!-- Hari -->
                    <template x-for="day in ['Mg', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb']">
                        <div class="text-xs font-bold text-gray-400 mb-4" x-text="day"></div>
                    </template>
                    
                    <!-- Kosong awal bulan (mulai Senin = 1) -->
                    <div></div>
                    
                    <!-- Tanggal 1 - 30 -->
                    <template x-for="i in 30" :key="i">
                        <div class="relative flex justify-center py-2">
                            <button 
                                @click="if(hasEvent(i)) selectEvent(i)"
                                class="w-10 h-10 rounded-full flex items-center justify-center font-sans text-sm transition-all duration-300 relative focus:outline-none"
                                :class="{
                                    'bg-gray-900 text-white shadow-md': selectedDay === i && hasEvent(i),
                                    'hover:bg-gray-100 text-gray-900 cursor-pointer': hasEvent(i) && selectedDay !== i,
                                    'text-gray-400 cursor-default': !hasEvent(i)
                                }"
                            >
                                <span x-text="i"></span>
                                <!-- Titik Event -->
                                <template x-if="hasEvent(i)">
                                    <div class="absolute -bottom-1 w-1.5 h-1.5 rounded-full bg-denrawit-red" :class="selectedDay === i ? 'bg-white' : 'bg-denrawit-red'"></div>
                                </template>
                            </button>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Kolom Kanan: Detail Acara & Poster -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 relative overflow-hidden transition-all duration-500 min-h-[400px] flex flex-col">
                    <template x-if="activeEvent">
                        <div x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-x-4"
                             x-transition:enter-end="opacity-100 translate-x-0"
                             class="flex flex-col h-full">
                             
                            <div class="flex-1">
                                <span class="bg-gray-50 text-denrawit-red px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest border border-gray-100 mb-6 inline-block" x-text="'AGENDA HARI KE-' + activeEvent.day"></span>
                                <h3 class="text-3xl font-serif font-bold text-gray-900 mb-3" x-text="activeEvent.title"></h3>
                                
                                <div class="flex items-center gap-4 text-xs font-bold text-gray-500 mb-6">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <span x-text="activeEvent.time"></span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        <span x-text="activeEvent.location"></span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 font-sans text-sm mb-6" x-text="activeEvent.desc"></p>
                            </div>

                            <!-- Area Poster Event -->
                            <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 relative group cursor-pointer border border-gray-100 shadow-sm">
                                <img :src="activeEvent.poster" :alt="activeEvent.title" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-blur-sm">
                                    <span class="bg-white text-gray-900 px-4 py-2 rounded-full text-xs font-bold shadow-lg">Lihat Poster</span>
                                </div>
                            </div>
                            
                            <div class="text-right mt-auto">
                                <button class="px-6 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-900 hover:bg-gray-50 hover:border-gray-300 transition-all shadow-sm">
                                    Ikuti Kegiatan &rarr;
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </div>

    <script>
        function calendarEvents() {
            return {
                selectedDay: 18,
                events: {
                    12: {
                        day: 12,
                        title: 'Workshop Digitalisasi Petani',
                        time: '13:00 WIB',
                        location: 'Balai Desa Cibodas',
                        desc: 'Sosialisasi penggunaan aplikasi pencatatan panen digital untuk mempermudah monitoring logistik.',
                        poster: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop'
                    },
                    18: {
                        day: 18,
                        title: 'Pelatihan Irigasi Tetes Pintar',
                        time: '09:00 WIB',
                        location: 'Pusat Koperasi Tani',
                        desc: 'Panduan teknis katup irigasi presisi tenaga surya untuk efisiensi air di musim kemarau.',
                        poster: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop'
                    },
                    25: {
                        day: 25,
                        title: 'Panen Raya Organik',
                        time: '07:00 WIB',
                        location: 'Blok Sawah Leles',
                        desc: 'Kegiatan panen bersama menggunakan teknik ramah lingkungan, dihadiri oleh seluruh komunitas pemuda tani.',
                        poster: 'https://images.unsplash.com/photo-1598908314766-31a6730245a4?q=80&w=2070&auto=format&fit=crop'
                    }
                },
                get activeEvent() {
                    return this.events[this.selectedDay];
                },
                hasEvent(day) {
                    return this.events.hasOwnProperty(day);
                },
                selectEvent(day) {
                    this.selectedDay = day;
                }
            }
        }
    </script>
</section>
