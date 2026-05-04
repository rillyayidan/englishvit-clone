<header class="sticky top-0 z-50 border-b border-blue-900 bg-[#004AAD]">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 shrink-0">
            <img src="{{ asset('logo.svg') }}" alt="Englishvit" class="h-10 w-auto">
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-1 lg:flex">
            <a href="#home" class="rounded-lg px-4 py-2.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">
                Beranda
            </a>

            {{-- Dropdown Daftar Kursus --}}
            <div class="relative" id="nav-dropdown">
                <button
                    onclick="toggleDropdown()"
                    class="flex items-center gap-1 rounded-lg px-4 py-2.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white"
                >
                    Daftar Kursus
                    <svg id="dropdown-arrow" class="h-4 w-4 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    id="dropdown-menu"
                    class="invisible absolute left-0 top-full z-50 mt-2 w-60 rounded-2xl border border-slate-100 bg-white p-2 opacity-0 shadow-xl transition-all duration-200"
                >
                    <a href="#live" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 text-red-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </span>
                        Live Class
                    </a>
                    <a href="#private" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 text-blue-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        One on One
                    </a>
                    <a href="#certification" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-purple-50 text-purple-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        Certification Test
                    </a>
                    <a href="#learning" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-amber-50 text-amber-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </span>
                        Learning Package
                    </a>
                    <a href="#book" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-teal-50 text-teal-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </span>
                        Smart Book
                    </a>
                    <a href="#subscription" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-blue-50 hover:text-[#004AAD]">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-pink-50 text-pink-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </span>
                        Subscription
                    </a>
                </div>
            </div>

            <a href="#blog" class="rounded-lg px-4 py-2.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Blog</a>
            <a href="#promo" class="rounded-lg px-4 py-2.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Promo</a>
            <a href="#karir" class="rounded-lg px-4 py-2.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Karir</a>
        </div>

        {{-- Desktop CTA Buttons --}}
        <div class="hidden items-center gap-3 lg:flex">
            <a href="/login" class="rounded-full border border-white/40 px-6 py-2.5 text-base font-semibold text-white transition-colors hover:bg-white/10">
                Masuk
            </a>
            <a href="/register" class="rounded-full bg-white px-6 py-2.5 text-base font-semibold text-[#004AAD] shadow-lg shadow-black/20 transition-all hover:bg-blue-50">
                Daftar
            </a>
        </div>

        {{-- Mobile Hamburger --}}
        <button
            onclick="toggleMobileMenu()"
            type="button"
            class="inline-flex items-center justify-center rounded-lg border border-white/30 p-2 text-white transition-colors hover:bg-white/10 lg:hidden"
            aria-label="Open menu"
        >
            <svg id="hamburger-icon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden border-t border-white/20 bg-[#004AAD] lg:hidden">
        <div class="space-y-1 px-4 py-4">
            <a href="#home" class="block rounded-lg px-4 py-3.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">
                Beranda
            </a>

            {{-- Mobile Dropdown --}}
            <div>
                <button
                    onclick="toggleMobileDropdown()"
                    class="flex w-full items-center justify-between rounded-lg px-4 py-3.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white"
                >
                    Daftar Kursus
                    <svg id="mobile-dropdown-arrow" class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobile-dropdown" class="hidden space-y-1 pl-4">
                    <a href="#live" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">Live Class</a>
                    <a href="#private" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">One on One</a>
                    <a href="#certification" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">Certification Test</a>
                    <a href="#learning" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">Learning Package</a>
                    <a href="#book" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">Smart Book</a>
                    <a href="#subscription" class="block rounded-lg px-4 py-3 text-base text-white/75 hover:text-white">Subscription</a>
                </div>
            </div>

            <a href="#blog" class="block rounded-lg px-4 py-3.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Blog</a>
            <a href="#promo" class="block rounded-lg px-4 py-3.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Promo</a>
            <a href="#karir" class="block rounded-lg px-4 py-3.5 text-base font-medium text-white/90 transition-colors hover:bg-white/10 hover:text-white">Karir</a>

            <div class="flex gap-3 pt-4">
                <a href="/login" class="flex-1 rounded-full border border-white/40 py-3 text-center text-base font-semibold text-white">Masuk</a>
                <a href="/register" class="flex-1 rounded-full bg-white py-3 text-center text-base font-semibold text-[#004AAD]">Daftar</a>
            </div>
        </div>
    </div>
</header>

{{-- Navbar Scripts --}}
<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        const arrow = document.getElementById('dropdown-arrow');
        const isOpen = !menu.classList.contains('invisible');

        if (isOpen) {
            menu.classList.add('invisible', 'opacity-0');
            menu.classList.remove('visible', 'opacity-100');
            arrow.style.transform = 'rotate(0deg)';
        } else {
            menu.classList.remove('invisible', 'opacity-0');
            menu.classList.add('visible', 'opacity-100');
            arrow.style.transform = 'rotate(180deg)';
        }
    }

    document.addEventListener('click', function (e) {
        const dropdown = document.getElementById('nav-dropdown');
        const menu = document.getElementById('dropdown-menu');
        const arrow = document.getElementById('dropdown-arrow');

        if (dropdown && !dropdown.contains(e.target)) {
            menu.classList.add('invisible', 'opacity-0');
            menu.classList.remove('visible', 'opacity-100');
            arrow.style.transform = 'rotate(0deg)';
        }
    });

    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const hamburger = document.getElementById('hamburger-icon');
        const close = document.getElementById('close-icon');

        menu.classList.toggle('hidden');
        hamburger.classList.toggle('hidden');
        close.classList.toggle('hidden');
    }

    function toggleMobileDropdown() {
        const dropdown = document.getElementById('mobile-dropdown');
        const arrow = document.getElementById('mobile-dropdown-arrow');

        dropdown.classList.toggle('hidden');
        arrow.style.transform = dropdown.classList.contains('hidden')
            ? 'rotate(0deg)'
            : 'rotate(180deg)';
    }
</script>
