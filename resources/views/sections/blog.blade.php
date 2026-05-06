{{-- Blog Section --}}
<section id="blog" class="bg-white px-4 pt-20 pb-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-3xl text-center">

            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                Artikel Pilihan untuk Upgrade Bahasa Inggrismu
            </h2>

            <p class="mt-4 text-base leading-7 text-slate-600">
                Baca tips, pembahasan soal, dan materi ringan seputar bahasa Inggris secara gratis.
            </p>
        </div>

        @php
            $blogs = [
                [
                    'title' => '10 Tips Mengerjakan Test TOEFL',
                    'date' => 'Aug 30, 2023',
                    'excerpt' => 'TOEFL adalah ujian standar yang mengukur kemampuan bahasa Inggris. Simak beberapa tips penting agar persiapanmu lebih terarah.',
                    'image' => 'https://cdn.englishvit.com/image/blog/vDB8e2OVhUO7gQqQjfwaAmmWOjiMTivWv1VQWUZw.png',
                    'url' => 'https://englishvit.com/artikel/10-tips-mengerjakan-test-toefl-6002',
                ],
                [
                    'title' => 'Perbedaan Used To dan Be Used To dan Contohnya dalam Bahasa Inggris',
                    'date' => 'Jun 06, 2023',
                    'excerpt' => 'Masih bingung membedakan used to dan be used to? Artikel ini membahas perbedaannya dengan contoh sederhana.',
                    'image' => 'https://cdn.englishvit.com/image/blog/41xpAxuLhSNmsTyWtnp2XzcrLgwnubR3KdMW1YtX.jpg',
                    'url' => 'https://englishvit.com/artikel/perbedaan-used-to-dan-be-used-to-dan-contohnya-dalam-bahasa-inggris-6157',
                ],
                [
                    'title' => 'Contoh Soal TOEFL Structure Lengkap Beserta Pembahasannya',
                    'date' => 'Jun 01, 2023',
                    'excerpt' => 'Latihan TOEFL Structure jadi lebih mudah dengan contoh soal dan pembahasan yang bisa kamu pelajari langsung.',
                    'image' => 'https://cdn.englishvit.com/image/blog/wID0FamGlUAC8htm8k3cRQLC45DQpaOwPFWbWvKA.png',
                    'url' => 'https://englishvit.com/artikel/contoh-soal-toefl-structure-lengkap-beserta-pembahasannya-5861',
                ],
            ];
        @endphp

        <div class="mt-14 grid gap-8 lg:grid-cols-3">
            @foreach ($blogs as $blog)
                <article class="group overflow-hidden rounded-3xl border border-slate-100 bg-white shadow-sm shadow-slate-200/70 transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <a href="{{ $blog['url'] }}" target="_blank" rel="noopener noreferrer" class="block">
                        <div class="relative h-56 overflow-hidden bg-slate-100">
                            <img
                                src="{{ $blog['image'] }}"
                                alt="{{ $blog['title'] }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="p-6">
                            <p class="text-sm font-semibold text-slate-400">
                                {{ $blog['date'] }}
                            </p>

                            <h3 class="mt-3 min-h-[64px] text-xl font-medium leading-snug text-slate-950 transition group-hover:text-blue-600">
                                {{ $blog['title'] }}
                            </h3>

                            <p class="mt-5 min-h-[84px] text-base leading-7 text-slate-600">
                                {{ $blog['excerpt'] }}
                            </p>

                            <div class="mt-6 inline-flex items-center gap-2 font-extrabold text-blue-600 transition group-hover:gap-3">
                                Selengkapnya
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a
                href="https://englishvit.com/artikel"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-blue-200 bg-blue-50 px-6 py-4 text-base font-extrabold text-blue-700 transition hover:-translate-y-1 hover:bg-blue-100"
            >
                Baca artikel lainnya
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
