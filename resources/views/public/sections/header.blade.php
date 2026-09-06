<header class="fixed top-0 w-full bg-denrawit-beige/90 backdrop-blur-md z-50 border-b border-gray-200" x-data="{ open: false }">
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
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-denrawit-green focus:outline-none">
                    <svg x-show="!open" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" style="display: none;" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div x-show="open" 
         style="display: none;"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-white border-t border-gray-200 absolute w-full shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a @click="open = false" href="#home" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">HOME</a>
            <a @click="open = false" href="#about" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">ABOUT</a>
            <a @click="open = false" href="#program" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">PROGRAM</a>
            <a @click="open = false" href="#field-notes" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">FIELD NOTES</a>
            <a @click="open = false" href="#ecosystem" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">ECOSYSTEM</a>
            <a @click="open = false" href="#impact-map" class="block px-3 py-3 text-base font-bold text-gray-900 border-b border-gray-100">IMPACT MAP</a>
            <a @click="open = false" href="#join-us" class="block px-3 py-3 text-base font-bold text-gray-900">JOIN US</a>
        </div>
    </div>
</header>
