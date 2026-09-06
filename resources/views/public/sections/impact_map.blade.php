<section id="impact-map" class="py-32 bg-denrawit-beige border-y border-gray-300">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-denrawit-red font-bold uppercase tracking-widest text-sm mb-4 block">07 — Interactive Impact Map</span>
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6 uppercase">
                Where The Movement Grows
            </h2>
            <p class="text-xl text-gray-700 font-serif italic max-w-2xl mx-auto">
                Eksplorasi jejak langkah dan dampak nyata program kami di berbagai titik lahan dan komunitas.
            </p>
        </div>

        <!-- Real Interactive Map Container -->
        <div class="relative w-full h-[600px] md:h-[700px] rounded-3xl border border-gray-300 overflow-hidden shadow-2xl bg-gray-100 z-10">
            
            <!-- Leaflet Map Div -->
            <div id="denrawit-map" class="w-full h-full z-0"></div>
            
            <!-- Map Layers Toggle (UI Overlay) -->
            <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-md border border-gray-200 p-6 rounded-2xl z-20 shadow-xl w-48 hidden md:block">
                <h4 class="font-bold text-sm tracking-widest uppercase mb-4 text-gray-900 border-b border-gray-200 pb-2">Kategori Data</h4>
                <div class="space-y-3 text-xs font-bold text-gray-600 uppercase tracking-wide">
                    <label class="flex items-center gap-3 cursor-pointer hover:text-gray-900"><div class="w-3 h-3 rounded-full bg-denrawit-red"></div> Lahan Tani</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-gray-900"><div class="w-3 h-3 rounded-full bg-denrawit-green"></div> Komunitas</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-gray-900"><div class="w-3 h-3 rounded-full bg-denrawit-yellow"></div> Titik Edukasi</label>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Leaflet CSS & JS via CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<!-- Custom Styles for Leaflet Popups to match Den Rawit aesthetic -->
<style>
    .leaflet-popup-content-wrapper {
        border-radius: 1rem;
        padding: 0;
        overflow: hidden;
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        border: 1px solid #e5e7eb;
    }
    .leaflet-popup-content {
        margin: 0;
        width: 280px !important;
    }
    .custom-popup img {
        width: 100%;
        height: 140px;
        object-fit: cover;
    }
    .custom-popup .content {
        padding: 16px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Koordinat area Garut, Jawa Barat
        var map = L.map('denrawit-map', {
            zoomControl: false // Kita pindah posisi zoom control
        }).setView([-7.2023, 107.8890], 11);

        // Tambah Zoom Control di kiri bawah
        L.control.zoom({ position: 'bottomleft' }).addTo(map);

        // Menggunakan tile CartoDB Positron untuk tampilan yang bersih dan elegan (mirip warna beige)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        // Data titik dummy
        var locations = [
            {
                lat: -7.1523, lng: 107.8290, 
                color: '#8B2E24', // denrawit-red
                title: 'Lahan Cabai Percontohan',
                img: 'https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop',
                type: 'Lahan Tani',
                desc: 'Area seluas 5 Hektar untuk penanaman cabai organik menggunakan metode regeneratif.'
            },
            {
                lat: -7.2123, lng: 107.9590, 
                color: '#2E5D3B', // denrawit-green
                title: 'Komunitas Wanita Tani Maju',
                img: 'https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1974&auto=format&fit=crop',
                type: 'Komunitas',
                desc: 'Pusat sortasi dan quality control cabai yang dipimpin oleh ibu-ibu desa.'
            },
            {
                lat: -7.2523, lng: 107.8590, 
                color: '#D4AF37', // denrawit-yellow
                title: 'Sekolah Lapang',
                img: 'https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop',
                type: 'Titik Edukasi',
                desc: 'Tempat berkumpulnya anak muda untuk belajar teknologi pertanian digital.'
            },
            {
                lat: -7.1823, lng: 107.8990, 
                color: '#8B2E24',
                title: 'Koperasi Produksi Saus',
                img: 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?q=80&w=1949&auto=format&fit=crop',
                type: 'Lahan Tani',
                desc: 'Pabrik mini tempat pengolahan cabai sisa panen menjadi produk bernilai jual tinggi.'
            }
        ];

        // Looping untuk membuat marker
        locations.forEach(function(loc) {
            var marker = L.circleMarker([loc.lat, loc.lng], {
                radius: 12,
                fillColor: loc.color,
                color: '#fff',
                weight: 3,
                opacity: 1,
                fillOpacity: 0.9
            }).addTo(map);

            // Membuat custom HTML Popup
            var popupContent = `
                <div class="custom-popup">
                    <img src="${loc.img}" alt="${loc.title}">
                    <div class="content">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-gray-500 block mb-1" style="color: ${loc.color};">${loc.type}</span>
                        <h3 class="font-serif font-bold text-lg text-gray-900 mb-2">${loc.title}</h3>
                        <p class="font-sans text-xs text-gray-600 leading-relaxed">${loc.desc}</p>
                    </div>
                </div>
            `;

            marker.bindPopup(popupContent);
        });
    });
</script>
