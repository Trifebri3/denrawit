@extends('layouts.public')

@section('title', 'Publikasi Detail - DEN RAWIT')

@section('content')
    <!-- Navbar Spacer -->
    <div class="h-24 bg-denrawit-beige w-full"></div>

    <article class="bg-denrawit-beige min-h-screen pb-32">
        <!-- Hero Section -->
        <div class="relative w-full h-[60vh] md:h-[80vh] bg-gray-900">
            <img src="https://images.unsplash.com/photo-1595859703043-433bf42034e1?q=80&w=2070&auto=format&fit=crop" alt="Hero Image" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 w-full p-8 md:p-16 max-w-5xl mx-auto">
                <a href="/" class="inline-flex items-center gap-2 text-white/70 hover:text-white transition-colors mb-8 font-sans text-sm font-bold tracking-widest uppercase">
                    &larr; KEMBALI
                </a>
                <span class="block text-denrawit-yellow font-bold uppercase tracking-widest text-xs mb-4">Farm / People</span>
                <h1 class="text-4xl md:text-7xl font-serif font-bold text-white mb-6 leading-tight">
                    Pagi di Kebun Cabai: <br>Melihat Harapan Tumbuh
                </h1>
                <div class="flex items-center gap-6 text-white/80 font-sans text-sm border-l-2 border-denrawit-red pl-4">
                    <div>
                        <span class="block text-xs uppercase tracking-widest text-white/50 mb-1">Tanggal</span>
                        <strong>15 Agustus 2026</strong>
                    </div>
                    <div>
                        <span class="block text-xs uppercase tracking-widest text-white/50 mb-1">Lokasi</span>
                        <strong>Balai Desa Sukamaju</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Body -->
        <div class="max-w-3xl mx-auto px-6 mt-16 md:mt-24 text-lg md:text-xl text-gray-800 font-sans leading-relaxed">
            
            <p class="mb-8 font-serif text-2xl md:text-3xl italic text-gray-600 leading-relaxed">
                "Ada cerita tentang pagi, embun, petani, cabai, dan aktivitas di kebun yang sering luput dari pandangan mata. Hari ini, kami turun langsung merasakannya."
            </p>

            <p class="mb-6">
                Kabut belum sepenuhnya naik ketika kami tiba di ladang cabai Blok Sawah Leles. Udara masih sangat dingin, namun aktivitas sudah dimulai sejak fajar. Puluhan petani sibuk memeriksa daun, memupuk, dan memastikan sistem irigasi tetes berjalan sempurna. Di lahan seluas 15 hektar ini, tidak hanya cabai yang ditanam, melainkan juga harapan akan ekosistem pertanian yang lebih baik.
            </p>

            <p class="mb-12">
                Melalui program regeneratif yang diinisiasi, kami berupaya mengembalikan kesehatan tanah yang puluhan tahun terus-menerus disuplai pupuk kimia. Praktik ini perlahan membuahkan hasil. Tanah menjadi lebih gembur, cacing tanah kembali terlihat, dan hasil panen menjadi jauh lebih tahan cuaca ekstrem.
            </p>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-16">
                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1974&auto=format&fit=crop" class="w-full h-80 object-cover rounded-3xl shadow-md" alt="Dokumentasi 1">
                <img src="https://images.unsplash.com/photo-1596700085449-93e5a5078508?q=80&w=2070&auto=format&fit=crop" class="w-full h-80 object-cover rounded-3xl shadow-md" alt="Dokumentasi 2">
            </div>

            <h3 class="text-3xl font-serif font-bold text-gray-900 mb-6">Masa Depan Berawal dari Tanah</h3>

            <p class="mb-6">
                Inovasi tidak selalu berarti aplikasi canggih atau alat berat. Terkadang, inovasi berarti kembali ke cara alam bekerja dan memberdayakan komunitas lokal untuk memimpin perubahan. Ibu-ibu tergabung dalam tim kontrol kualitas, pemuda mengelola pencatatan data panen digital, dan para tetua mewariskan kearifan membaca musim.
            </p>
            
            <div class="bg-white p-8 md:p-12 rounded-3xl border border-gray-200 shadow-xl my-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-denrawit-red/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-denrawit-green mb-4">Dampak Langsung</h4>
                <ul class="space-y-4 font-serif text-lg md:text-xl">
                    <li class="flex items-start gap-4">
                        <span class="text-denrawit-red">&bull;</span>
                        <span>Produktivitas meningkat 30% berkat pemulihan hara tanah.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-denrawit-red">&bull;</span>
                        <span>Melibatkan lebih dari 75 keluarga petani dalam proses hulu ke hilir.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-denrawit-red">&bull;</span>
                        <span>Melahirkan 3 produk olahan baru dari kelompok tani pemuda.</span>
                    </li>
                </ul>
            </div>

            <p class="mb-6">
                Langkah selanjutnya adalah memastikan bahwa apa yang dimulai di sini bisa diduplikasi di desa-desa lain. Ini bukan sekadar tentang bertani cabai; ini tentang membangun sebuah gerakan yang menjadikan pertanian sebagai profesi yang bermartabat dan menjanjikan bagi generasi mendatang.
            </p>
        </div>
        
        <!-- Next/Prev Section -->
        <div class="max-w-3xl mx-auto px-6 mt-20 border-t border-gray-300 pt-10 flex justify-between items-center">
            <a href="/" class="font-serif font-bold text-xl text-gray-400 hover:text-gray-900 transition-colors">
                &larr; Beranda
            </a>
            <div class="text-right">
                <span class="block text-xs uppercase tracking-widest text-gray-400 mb-1">BACA SELANJUTNYA</span>
                <a href="#" class="font-serif font-bold text-xl md:text-2xl text-gray-900 hover:text-denrawit-red transition-colors">
                    Menunggang Kuda Setelah Panen &rarr;
                </a>
            </div>
        </div>
    </article>
@endsection
