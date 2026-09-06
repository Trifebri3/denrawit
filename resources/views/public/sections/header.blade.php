<header class="fixed top-0 w-full bg-denrawit-beige/90 backdrop-blur-md z-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('logo.png') }}" alt="DEN RAWIT Logo" class="h-10 w-auto">
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">HOME</a>
                <a href="#about" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">ABOUT</a>
                <a href="#program" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">PROGRAM</a>
                <a href="#field-notes" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">FIELD NOTES</a>
                <a href="#ecosystem" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">ECOSYSTEM</a>
                <a href="#impact-map" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">IMPACT MAP</a>
                <a href="#join-us" class="text-gray-800 hover:text-denrawit-green px-3 py-2 text-sm font-medium transition-colors">JOIN US</a>
            </nav>

            <!-- CTA -->
            <div class="hidden md:flex items-center">
                <a href="#field-notes" class="group flex items-center gap-2 text-sm font-bold text-denrawit-green hover:text-denrawit-red transition-colors">
                    EXPLORE THE FIELD 
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-denrawit-green focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
