{{-- Testimonials Section --}}
<section id="testimonials" class="overflow-hidden bg-gradient-to-b from-slate-50 to-blue-50 px-4 py-20 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
        {{-- Header --}}
        <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-end">
            <div>
                <span class="inline-flex rounded-full border border-blue-200 bg-white px-4 py-1.5 text-sm font-bold text-blue-700 shadow-sm">
                    Testimoni Siswa
                </span>

                <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                    +58.824 Satisfied Students
                </h2>

                <p class="mt-4 max-w-2xl text-base leading-7 text-slate-600">
                    Ribuan siswa telah merasakan pengalaman belajar yang lebih praktis, menyenangkan, dan relevan bersama Englishvit.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-white/70 bg-white/80 p-5 shadow-sm backdrop-blur">
                    <p class="text-sm font-semibold text-slate-500">Average Rating</p>
                    <div class="mt-2 flex items-center gap-2">
                        <span class="text-2xl font-extrabold text-slate-950">4.9/5</span>
                        <div class="flex items-center gap-1 text-amber-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="mt-2 text-sm text-slate-500">Berdasarkan ribuan pengalaman belajar siswa.</p>
                </div>

                <div class="rounded-2xl border border-blue-100 bg-blue-600 p-5 text-white shadow-sm">
                    <p class="text-sm font-semibold text-blue-100">Why they stay</p>
                    <p class="mt-2 text-2xl font-extrabold">Practical & Friendly</p>
                    <p class="mt-2 text-sm leading-6 text-blue-100">
                        Metode belajar fokus pada praktik, bukan cuma teori.
                    </p>
                </div>
            </div>
        </div>

        @php
            $testimonials = [
                [
                    'name' => 'Sugionoy',
                    'role' => 'Employee',
                    'text' => 'Saya semakin PD dalam speaking. Materinya dijelasin dengan santai dan selalu dimulai dengan obrolan yang akrab. Seru dan nyenengin banget.',
                    'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face',
                ],
                [
                    'name' => 'Hadi Sucipto',
                    'role' => 'Employee',
                    'text' => 'Di pekerjaan saya dituntut untuk bisa berbahasa Inggris, dan di Englishvit saya semakin PD karena Grammar for Speaking class. Thank you Englishvit.',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
                ],
                [
                    'name' => 'Tri Puji Astuti',
                    'role' => 'College Student',
                    'text' => 'Sangat nyaman belajar di Englishvit. Materi disampaikan santai, mudah dipahami, dan banyak kesempatan praktik di setiap sesi.',
                    'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face',
                ],
                [
                    'name' => 'Rina Wulandari',
                    'role' => 'Marketing Manager',
                    'text' => 'Englishvit benar-benar mengubah cara saya belajar bahasa Inggris. Dari yang awalnya grogi berbicara, sekarang saya lebih percaya diri.',
                    'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                ],
                [
                    'name' => 'Budi Santoso',
                    'role' => 'Scholarship Hunter',
                    'text' => 'Skor IELTS saya naik dengan latihan yang terarah. Pengajarnya sabar, profesional, dan feedback-nya sangat membantu.',
                    'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                ],
            ];

            $partners = [
                [
                    'name' => 'BNEC',
                    'image' => 'https://englishvit.com/image/partner/tnss/bnec.webp',
                ],
                [
                    'name' => 'Bhina Bhakti Husada',
                    'image' => 'https://englishvit.com/image/partner/tnss/bhina-bhakti-husada.webp',
                ],
                [
                    'name' => 'Himatekk ITS',
                    'image' => 'https://englishvit.com/image/partner/tnss/himatekkits.webp',
                ],
                [
                    'name' => 'Thenblank',
                    'image' => 'https://englishvit.com/image/partner/tnss/thenblank.webp',
                ],
                [
                    'name' => 'Sicepat',
                    'image' => 'https://englishvit.com/image/partner/tnss/sicepat.webp',
                ],
                [
                    'name' => 'Indmira',
                    'image' => 'https://englishvit.com/image/partner/tnss/indmira.webp',
                ],
                [
                    'name' => 'PTPN',
                    'image' => 'https://englishvit.com/image/partner/tnss/ptpn.webp',
                ],
                [
                    'name' => 'ABP Amikom',
                    'image' => 'https://englishvit.com/image/partner/tnss/abp-amikom.webp',
                ],
                [
                    'name' => 'Detik',
                    'image' => 'https://englishvit.com/image/partner/tnss/detik.webp',
                ],
                [
                    'name' => 'G2',
                    'image' => 'https://englishvit.com/image/partner/tnss/g2.webp',
                ],
                [
                    'name' => 'Primafit',
                    'image' => 'https://englishvit.com/image/partner/tnss/primafit.webp',
                ],
            ];
        @endphp

        {{-- Testimonial Carousel --}}
        <div class="relative mt-14">
            <button
                type="button"
                id="testimonialPrev"
                class="absolute -left-4 top-1/2 z-20 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white text-slate-700 shadow-lg ring-1 ring-slate-200 transition hover:bg-blue-600 hover:text-white lg:flex"
                aria-label="Previous testimonials"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <div
                id="testimonialCarousel"
                class="flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth pb-6 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden"
            >
                @foreach ($testimonials as $testimonial)
                    <article class="testimonial-card flex min-w-full snap-start flex-col rounded-[28px] border border-white/70 bg-white/85 p-7 shadow-lg shadow-blue-100/40 backdrop-blur transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)]">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex items-center gap-1 text-amber-400">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.17 6A4.17 4.17 0 003 10.17V12h4.83v5H3v1h6V10H5.05A2.95 2.95 0 018 7.05V6H7.17zm10 0A4.17 4.17 0 0013 10.17V12h4.83v5H13v1h6V10h-3.95A2.95 2.95 0 0118 7.05V6h-.83z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="mt-6 flex-1 text-base leading-8 text-slate-700">
                            {{ $testimonial['text'] }}
                        </p>

                        <div class="mt-8 flex items-center gap-4 border-t border-slate-100 pt-5">
                            <img
                                src="{{ $testimonial['avatar'] }}"
                                alt="{{ $testimonial['name'] }}"
                                class="h-12 w-12 rounded-full object-cover ring-4 ring-blue-50"
                            >

                            <div>
                                <h3 class="font-extrabold text-slate-900">
                                    {{ $testimonial['name'] }}
                                </h3>
                                <p class="text-sm text-slate-500">
                                    {{ $testimonial['role'] }}
                                </p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <button
                type="button"
                id="testimonialNext"
                class="absolute -right-4 top-1/2 z-20 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white text-slate-700 shadow-lg ring-1 ring-slate-200 transition hover:bg-blue-600 hover:text-white lg:flex"
                aria-label="Next testimonials"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div id="testimonialDots" class="mt-5 flex justify-center gap-2"></div>
        </div>

        {{-- Partner Marquee --}}
        <div class="mt-20">
            <div class="text-center">
                <h3 class="text-2xl font-extrabold text-slate-950">
                    Trusted by 250+ institutions & companies
                </h3>
                <p class="mt-3 text-slate-600">
                    Sebagian partner yang telah menggunakan layanan Englishvit.
                </p>
            </div>

            <div class="mt-10 overflow-hidden">
                <div class="partner-marquee">
                    <div class="partner-track">
                        @foreach (array_merge($partners, $partners) as $partner)
                            <a
                                href="#"
                                class="partner-item flex h-20 min-w-[180px] items-center justify-center px-6 transition hover:scale-105"
                            >
                            <img
                                src="{{ $partner['image'] }}"
                                alt="{{ $partner['name'] }}"
                                class="max-h-14 w-auto object-contain transition duration-300 hover:scale-105"
                            >
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('testimonialCarousel');
        const prevButton = document.getElementById('testimonialPrev');
        const nextButton = document.getElementById('testimonialNext');
        const dotsWrapper = document.getElementById('testimonialDots');

        if (!carousel || !prevButton || !nextButton || !dotsWrapper) return;

        const cards = Array.from(carousel.querySelectorAll('.testimonial-card'));

        const getVisibleCards = () => {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        };

        const getCardStep = () => {
            const firstCard = cards[0];
            if (!firstCard) return 0;

            const styles = getComputedStyle(carousel);
            const gap = parseFloat(styles.gap || styles.columnGap || 0);

            return firstCard.getBoundingClientRect().width + gap;
        };

        const getPageCount = () => Math.ceil(cards.length / getVisibleCards());

        const getCurrentPage = () => {
            const step = getCardStep() * getVisibleCards();
            if (!step) return 0;
            return Math.round(carousel.scrollLeft / step);
        };

        const scrollToPage = (pageIndex) => {
            const maxPage = getPageCount() - 1;
            const safePage = Math.max(0, Math.min(pageIndex, maxPage));

            carousel.scrollTo({
                left: getCardStep() * getVisibleCards() * safePage,
                behavior: 'smooth',
            });
        };

        const updateDots = () => {
            const currentPage = getCurrentPage();
            const dots = dotsWrapper.querySelectorAll('.testimonial-dot');

            dots.forEach((dot, index) => {
                dot.className = index === currentPage
                    ? 'testimonial-dot h-2.5 w-8 rounded-full bg-blue-600 transition-all'
                    : 'testimonial-dot h-2.5 w-2.5 rounded-full bg-slate-300 transition-all hover:bg-blue-300';
            });

            prevButton.disabled = currentPage === 0;
            nextButton.disabled = currentPage >= getPageCount() - 1;

            prevButton.classList.toggle('opacity-40', prevButton.disabled);
            nextButton.classList.toggle('opacity-40', nextButton.disabled);
        };

        const renderDots = () => {
            dotsWrapper.innerHTML = '';

            for (let i = 0; i < getPageCount(); i++) {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'testimonial-dot h-2.5 w-2.5 rounded-full bg-slate-300 transition-all hover:bg-blue-300';
                dot.setAttribute('aria-label', `Go to testimonial page ${i + 1}`);
                dot.addEventListener('click', () => scrollToPage(i));
                dotsWrapper.appendChild(dot);
            }

            updateDots();
        };

        prevButton.addEventListener('click', () => scrollToPage(getCurrentPage() - 1));
        nextButton.addEventListener('click', () => scrollToPage(getCurrentPage() + 1));

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
