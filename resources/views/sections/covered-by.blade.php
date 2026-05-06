{{-- Covered By + Consultation CTA Section --}}
<section id="covered-by" class="bg-white px-4 py-20 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
        @php
            $mediaLogos = [
                [
                    'name' => 'iNews',
                    'image' => 'https://englishvit.com/image/news/inews.webp',
                    'url' => 'https://www.inews.id/news/nasional/tes-toefl-pengertian-skor-biaya-dan-contohnya-agar-lolos',
                ],
                [
                    'name' => 'Liputan 6',
                    'image' => 'https://englishvit.com/image/news/liputan6.webp',
                    'url' => 'https://www.liputan6.com/regional/read/5291362/ini-trik-agar-ujian-toelf-bisa-lebih-mudah-serta-hemat-waktu-dan-biaya',
                ],
                [
                    'name' => 'Media Indonesia',
                    'image' => 'https://englishvit.com/image/news/media-indonesia.webp',
                    'url' => 'https://mediaindonesia.com/weekend/582445/cara-mudah-dan-simpel-ikut-test-toefl',
                ],
                [
                    'name' => 'Sindo News',
                    'image' => 'https://englishvit.com/image/news/sindonews.webp',
                    'url' => 'https://edukasi.sindonews.com/read/1102949/211/ingin-tingkatkan-kemampuan-bahasa-inggris-dan-toefl-bisa-coba-platform-ini-1684497944',
                ],
                [
                    'name' => 'Suara.com',
                    'image' => 'https://englishvit.com/image/news/suaracom.webp',
                    'url' => 'https://www.suara.com/pressrelease/2023/05/19/064500/mudahkan-masyarakat-akses-tes-bahasa-inggris-standar-internasional-englishvit-hadirkan-platform-tes-online',
                ],
                [
                    'name' => 'Warta Jatim',
                    'image' => 'https://englishvit.com/image/news/warta-jatim.webp',
                    'url' => 'https://wartajatim.co.id/kemudahan-akses-tes-bahasa-inggris-englishvit-perkenalkan-platform-tes-online-inovatif/',
                ],
            ];
        @endphp

        {{-- Media Coverage --}}
        <div class="text-center">
            <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-slate-950 sm:text-3xl">
                Telah Diliput Oleh
            </h2>
        </div>

        <div class="relative mt-10 overflow-hidden ">
            <div class="pointer-events-none absolute left-0 top-0 z-10 h-full w-24 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute right-0 top-0 z-10 h-full w-24 bg-gradient-to-l from-white to-transparent"></div>

            <div class="media-marquee">
                <div class="media-track">
                    @foreach (array_merge($mediaLogos, $mediaLogos) as $media)
                        <a
                            href="{{ $media['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="media-item flex h-16 min-w-[220px] items-center justify-center px-8 transition hover:scale-105"
                        >
                            <img
                                src="{{ $media['image'] }}"
                                alt="{{ $media['name'] }}"
                                class="max-h-12 w-auto object-contain"
                            >
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Consultation CTA --}}
        <div
            class="mt-14 overflow-hidden rounded-[2rem] bg-cover bg-center bg-no-repeat shadow-2xl shadow-blue-900/20"
            style="background-image: url('https://englishvit.com/image/home/ld%202023/bgt.webp');"
        >
            <div class="relative grid gap-10 bg-blue-950/55 px-6 py-10 backdrop-blur-[1px] sm:px-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-center lg:px-14">
                {{-- Left visual --}}
                <div class="relative hidden lg:block">
                    <div class="relative mx-auto max-w-sm">
                        <img
                            src="https://englishvit.com/image/wa/admin2.webp"
                            alt="Englishvit admin consultation"
                            class="relative z-10 w-full object-contain drop-shadow-2xl"
                        >

                        <div class="absolute -right-4 top-8 rounded-2xl bg-yellow-400 px-4 py-3 text-sm font-black text-blue-950 shadow-xl">
                            Free Consult
                        </div>

                        <div class="absolute bottom-6 right-4 flex h-16 w-16 items-center justify-center rounded-full bg-green-500 text-white shadow-2xl ring-4 ring-white/30">
                            <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.86 11.86 0 0012.07 0C5.46 0 .09 5.37.09 11.98c0 2.11.55 4.17 1.6 5.98L0 24l6.19-1.62a11.95 11.95 0 005.88 1.5h.01c6.61 0 11.98-5.37 11.98-11.98 0-3.2-1.25-6.21-3.54-8.42z" />
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- Right content --}}
                <div class="relative z-10 text-center lg:text-left">
                    <p class="text-base font-bold text-blue-100">
                        Masih bingung menentukan program?
                    </p>

                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">
                        Yuk, konsultasi dengan friendly admin Englishvit!
                    </h2>

                    <p class="mt-5 max-w-3xl text-base leading-8 text-blue-50 sm:text-lg">
                        Live Chat & Helpdesk via WhatsApp tersedia setiap hari Senin–Minggu,
                        09:00 – 22:00 WIB.
                    </p>

                    <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:justify-center lg:justify-start">
                        <a
                            href="https://englishvit.com/wa/intro/general"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-500 px-6 py-4 text-base font-extrabold text-white shadow-lg shadow-green-700/20 transition hover:-translate-y-1 hover:bg-green-400"
                        >
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.86 11.86 0 0012.07 0C5.46 0 .09 5.37.09 11.98c0 2.11.55 4.17 1.6 5.98L0 24l6.19-1.62a11.95 11.95 0 005.88 1.5h.01c6.61 0 11.98-5.37 11.98-11.98 0-3.2-1.25-6.21-3.54-8.42zM12.08 21.86h-.01a9.9 9.9 0 01-5.05-1.38l-.36-.21-3.67.96.98-3.58-.23-.37a9.88 9.88 0 01-1.52-5.3c0-5.45 4.44-9.89 9.9-9.89a9.83 9.83 0 017 2.9 9.83 9.83 0 012.9 7c-.01 5.45-4.45 9.87-9.9 9.87z" />
                            </svg>

                            Chat Admin Sekarang
                        </a>

                        <a
                            href="#programs"
                            class="inline-flex items-center justify-center rounded-xl border border-white/30 bg-white/10 px-6 py-4 text-base font-bold text-white backdrop-blur transition hover:-translate-y-1 hover:bg-white/15"
                        >
                            Lihat Program Dulu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
