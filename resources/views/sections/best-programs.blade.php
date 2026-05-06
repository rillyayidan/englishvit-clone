{{-- Best Program Section --}}
<section id="best-programs" class="bg-white px-4 py-20 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                Program Rekomendasi Terbaik
            </h2>

            <p class="mx-auto mt-4 max-w-3xl text-base leading-7 text-slate-600">
                Coba pengalaman belajar bahasa Inggris super seru dengan program rekomendasi Learning Consultant kami.
            </p>
        </div>

        @php
            $programs = [
                [
                    'category' => 'English Test',
                    'categoryColor' => 'yellow',
                    'title' => 'IELTS Bootcamp',
                    'description' => 'Belajar strategi dan latihan menjawab soal IELTS',
                    'price' => 'Rp332.000',
                    'discount' => '60%',
                    'oldPrice' => 'Rp830.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://cdn.englishvit.com/image/zt5ewKOLFY22ITbNFyx8ZRCCrKWE4FdMdR1G6ofD.png',
                ],
                [
                    'category' => 'English Test',
                    'categoryColor' => 'yellow',
                    'title' => 'IELTS Mock Test',
                    'description' => 'Cuma mau tahu level awal kemampuan IELTS kamu',
                    'price' => 'Rp99.000',
                    'discount' => null,
                    'oldPrice' => null,
                    'button' => 'Lihat Detail',
                    'image' => 'https://englishvit.com/path/images/program/package/P0LAHO6mTQQ9SKVgjFjdjj5BoYJvjmSpb4wie36n.jpg',
                ],
                [
                    'category' => 'Learning Package',
                    'categoryColor' => 'blue',
                    'title' => 'English for Basic',
                    'description' => 'Paket lengkap belajar bahasa Inggris dari NOL sampai BISA',
                    'price' => 'Rp66.000',
                    'discount' => '50%',
                    'oldPrice' => 'Rp132.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://cdn.englishvit.com/image/3iUF5vgi9ebJjzqrJbltw3wdPBolfAxuzsQi1ggU.png',
                ],
                [
                    'category' => 'Live Class',
                    'categoryColor' => 'yellow',
                    'title' => 'Next Level English',
                    'description' => 'Accelerating your English 10X faster and easier',
                    'price' => 'Rp412.500',
                    'discount' => '50%',
                    'oldPrice' => 'Rp825.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://englishvit.com/path/images/program/package/EjVVAzvOCqXyDjPJYxg7GuOQGgkInVy6OXL4yGsV.png',
                ],
                [
                    'category' => 'One on One',
                    'categoryColor' => 'pink',
                    'title' => 'Private Speaking Class',
                    'description' => 'Latihan speaking intensif satu murid dengan satu tutor',
                    'price' => 'Rp299.000',
                    'discount' => '35%',
                    'oldPrice' => 'Rp460.000',
                    'button' => 'Lihat Detail',
                    'image' => 'https://cdn.englishvit.com/image/bs1roPq3ThvQ88NrFGBjVtN455i1caDrZM1doiqb.jpg',
                ],
                [
                    'category' => 'Live Class',
                    'categoryColor' => 'yellow',
                    'title' => 'Grammar Mastery',
                    'description' => 'Pahami grammar penting untuk komunikasi dan tes bahasa Inggris',
                    'price' => 'Rp189.000',
                    'discount' => '40%',
                    'oldPrice' => 'Rp315.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://cdn.englishvit.com/image/dXT1WPK7BiybrnWNXhF4SU4s2oCKNeQv4YFQ5hG0.jpg',
                ],
                [
                    'category' => 'Learning Package',
                    'categoryColor' => 'blue',
                    'title' => 'English for Career',
                    'description' => 'Belajar English interview, email kerja, dan presentasi profesional',
                    'price' => 'Rp249.000',
                    'discount' => '45%',
                    'oldPrice' => 'Rp452.000',
                    'button' => 'Lihat Detail',
                    'image' => 'https://englishvit.com/path/images/program/package/RSaDQXd3V2jyiinp8mdtvicXX4NZtlRrviZ2SDWY.jpg',
                ],
                [
                    'category' => 'Certification Test',
                    'categoryColor' => 'blue',
                    'title' => 'TOEFL Preparation',
                    'description' => 'Persiapan TOEFL dengan latihan soal dan pembahasan terarah',
                    'price' => 'Rp275.000',
                    'discount' => '30%',
                    'oldPrice' => 'Rp393.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://cdn.englishvit.com/image/zt5ewKOLFY22ITbNFyx8ZRCCrKWE4FdMdR1G6ofD.png',
                ],
                [
                    'category' => 'Smart Book',
                    'categoryColor' => 'green',
                    'title' => 'Vocabulary Builder',
                    'description' => 'Bangun kosakata harian untuk percakapan, kerja, dan akademik',
                    'price' => 'Rp79.000',
                    'discount' => null,
                    'oldPrice' => null,
                    'button' => 'Lihat Detail',
                    'image' => 'https://englishvit.com/path/images/program/package/P0LAHO6mTQQ9SKVgjFjdjj5BoYJvjmSpb4wie36n.jpg',
                ],
                [
                    'category' => 'Subscription',
                    'categoryColor' => 'purple',
                    'title' => 'Englishvit Plus',
                    'description' => 'Akses materi premium dan latihan belajar fleksibel setiap bulan',
                    'price' => 'Rp59.000',
                    'discount' => '25%',
                    'oldPrice' => 'Rp79.000',
                    'button' => 'Lihat Detail',
                    'image' => 'https://cdn.englishvit.com/image/3iUF5vgi9ebJjzqrJbltw3wdPBolfAxuzsQi1ggU.png',
                ],
                [
                    'category' => 'Live Class',
                    'categoryColor' => 'yellow',
                    'title' => 'Daily Conversation',
                    'description' => 'Latihan percakapan sehari-hari agar makin percaya diri',
                    'price' => 'Rp149.000',
                    'discount' => '35%',
                    'oldPrice' => 'Rp229.000',
                    'button' => 'Lihat Kelas',
                    'image' => 'https://englishvit.com/path/images/program/package/EjVVAzvOCqXyDjPJYxg7GuOQGgkInVy6OXL4yGsV.png',
                ],
            ];
        @endphp

        <div class="relative mt-12">
            {{-- Left button --}}
            <button
                type="button"
                id="programPrev"
                class="absolute -left-4 top-1/2 z-20 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white text-slate-700 shadow-lg ring-1 ring-slate-200 transition hover:bg-blue-600 hover:text-white lg:flex"
                aria-label="Previous programs"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            {{-- Carousel --}}
            <div
                id="programCarousel"
                class="flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth pb-6 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden"
            >
                @foreach ($programs as $program)
                    <article class="program-card group flex min-w-full snap-start flex-col overflow-hidden rounded-xl bg-white shadow-lg shadow-slate-200/80 ring-1 ring-slate-100 transition duration-300 hover:-translate-y-2 hover:shadow-2xl sm:min-w-[calc(50%-10px)] lg:min-w-[calc(25%-15px)]">
                        {{-- Real image --}}
                        <div class="h-44 overflow-hidden bg-slate-100">
                            <img
                                src="{{ $program['image'] }}"
                                alt="{{ $program['title'] }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="flex flex-1 flex-col p-5">
                            <div>
                                <span
                                    class="
                                        inline-flex items-center gap-1 rounded-md px-3 py-1 text-xs font-bold
                                        @if ($program['categoryColor'] === 'yellow') bg-yellow-50 text-yellow-600
                                        @elseif ($program['categoryColor'] === 'pink') bg-pink-50 text-pink-600
                                        @elseif ($program['categoryColor'] === 'green') bg-emerald-50 text-emerald-600
                                        @elseif ($program['categoryColor'] === 'purple') bg-purple-50 text-purple-600
                                        @else bg-blue-50 text-blue-600
                                        @endif
                                    "
                                >
                                    <span class="h-2 w-2 rounded-full bg-current"></span>
                                    {{ $program['category'] }}
                                </span>

                                <h3 class="mt-4 text-xl font-extrabold text-slate-900">
                                    {{ $program['title'] }}
                                </h3>

                                <p class="mt-8 text-base leading-7 text-slate-600">
                                    Cocok untuk: {{ $program['description'] }}
                                </p>
                            </div>

                            <div class="mt-auto pt-6">
                                <p class="text-xl font-extrabold text-slate-900">
                                    {{ $program['price'] }}
                                </p>

                                <div class="mt-2 min-h-6">
                                    @if ($program['discount'])
                                        <div class="flex items-center gap-2">
                                            <span class="rounded-md bg-rose-50 px-2 py-1 text-sm font-bold text-rose-500">
                                                {{ $program['discount'] }}
                                            </span>
                                            <span class="text-sm text-slate-400 line-through">
                                                {{ $program['oldPrice'] }}
                                            </span>
                                        </div>
                                    @endif
                                </div>

                                <a
                                    href="#"
                                    class="mt-5 inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-3 text-base font-extrabold text-white transition hover:bg-blue-700"
                                >
                                    {{ $program['button'] }}
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Right button --}}
            <button
                type="button"
                id="programNext"
                class="absolute -right-4 top-1/2 z-20 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white text-slate-700 shadow-lg ring-1 ring-slate-200 transition hover:bg-blue-600 hover:text-white lg:flex"
                aria-label="Next programs"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            {{-- Pagination dots --}}
            <div id="programDots" class="mt-4 flex justify-center gap-2"></div>
        </div>

        <div class="mt-10 text-center">
            <a href="#" class="inline-flex items-center gap-2 text-lg font-extrabold text-blue-600 transition hover:gap-3 hover:text-blue-700">
                Lihat semua kelas
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('programCarousel');
        const prevButton = document.getElementById('programPrev');
        const nextButton = document.getElementById('programNext');
        const dotsWrapper = document.getElementById('programDots');

        if (!carousel || !prevButton || !nextButton || !dotsWrapper) return;

        const cards = Array.from(carousel.querySelectorAll('.program-card'));

        const getVisibleCards = () => {
            if (window.innerWidth >= 1024) return 4;
            if (window.innerWidth >= 640) return 2;
            return 1;
        };

        const getCardStep = () => {
            const firstCard = cards[0];
            if (!firstCard) return 0;

            const gap = parseFloat(getComputedStyle(carousel).columnGap || getComputedStyle(carousel).gap || 0);
            return firstCard.getBoundingClientRect().width + gap;
        };

        const getPageCount = () => {
            return Math.ceil(cards.length / getVisibleCards());
        };

        const getCurrentPage = () => {
            const step = getCardStep() * getVisibleCards();
            if (!step) return 0;

            return Math.round(carousel.scrollLeft / step);
        };

        const scrollToPage = (pageIndex) => {
            const maxPage = getPageCount() - 1;
            const safePage = Math.max(0, Math.min(pageIndex, maxPage));
            const scrollAmount = getCardStep() * getVisibleCards() * safePage;

            carousel.scrollTo({
                left: scrollAmount,
                behavior: 'smooth',
            });
        };

        const renderDots = () => {
            dotsWrapper.innerHTML = '';

            for (let index = 0; index < getPageCount(); index++) {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'program-dot h-2.5 rounded-full transition-all';
                dot.setAttribute('aria-label', `Go to program page ${index + 1}`);
                dot.addEventListener('click', () => scrollToPage(index));

                dotsWrapper.appendChild(dot);
            }

            updateDots();
        };

        const updateDots = () => {
            const currentPage = getCurrentPage();
            const dots = dotsWrapper.querySelectorAll('.program-dot');

            dots.forEach((dot, index) => {
                dot.className = index === currentPage
                    ? 'program-dot h-2.5 w-8 rounded-full bg-blue-600 transition-all'
                    : 'program-dot h-2.5 w-2.5 rounded-full bg-slate-300 transition-all hover:bg-blue-300';
            });

            prevButton.disabled = currentPage === 0;
            nextButton.disabled = currentPage >= getPageCount() - 1;

            prevButton.classList.toggle('opacity-40', prevButton.disabled);
            nextButton.classList.toggle('opacity-40', nextButton.disabled);
        };

        prevButton.addEventListener('click', () => {
            scrollToPage(getCurrentPage() - 1);
        });

        nextButton.addEventListener('click', () => {
            scrollToPage(getCurrentPage() + 1);
        });

        carousel.addEventListener('scroll', () => {
            window.requestAnimationFrame(updateDots);
        });

        window.addEventListener('resize', () => {
            renderDots();
            scrollToPage(0);
        });

        renderDots();
    });
</script>
