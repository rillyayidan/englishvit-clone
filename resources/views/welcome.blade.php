@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section
        id="home"
        class="relative min-h-screen overflow-hidden bg-[#043b82] pt-28 text-white sm:pt-32 lg:pt-36"
    >
        {{-- Background decoration --}}
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute -left-32 top-20 h-[420px] w-[420px] rounded-full bg-blue-400/20 blur-3xl"></div>
            <div class="absolute -right-40 bottom-0 h-[520px] w-[520px] rounded-full bg-cyan-400/20 blur-3xl"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(59,130,246,0.35),transparent_35%),radial-gradient(circle_at_bottom_left,rgba(14,165,233,0.2),transparent_30%)]"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 pb-20 sm:px-6 lg:grid-cols-2 lg:px-8 lg:pb-24">
            {{-- Left Content --}}
            <div class="max-w-2xl">
                <h1 class="mt-7 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Tempat Terbaik Belajar Bahasa Inggris Langsung Praktik
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-8 text-blue-50/90">
                    Konsultasikan rencana belajarmu dan dapatkan penawaran spesial langsung dari admin Englishvit.
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <a
                        href="#programs"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-yellow-400 px-6 py-4 text-base font-bold text-blue-950 shadow-lg shadow-yellow-500/20 transition hover:-translate-y-0.5 hover:bg-yellow-300"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10.5A1.5 1.5 0 013.5 9H5v8H3.5A1.5 1.5 0 012 15.5v-5zM7 17V8.25l3.02-5.286A2 2 0 0113.75 4v4h2.376a2 2 0 011.94 2.485l-1.5 6A2 2 0 0114.626 18H8a1 1 0 01-1-1z" />
                        </svg>
                        Daftar Sekarang
                    </a>

                    <a
                        href="#contact"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/40 bg-white/5 px-6 py-4 text-base font-bold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/10"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.52 3.48A11.86 11.86 0 0012.07 0C5.46 0 .09 5.37.09 11.98c0 2.11.55 4.17 1.6 5.98L0 24l6.19-1.62a11.95 11.95 0 005.88 1.5h.01c6.61 0 11.98-5.37 11.98-11.98 0-3.2-1.25-6.21-3.54-8.42zM12.08 21.86h-.01a9.9 9.9 0 01-5.05-1.38l-.36-.21-3.67.96.98-3.58-.23-.37a9.88 9.88 0 01-1.52-5.3c0-5.45 4.44-9.89 9.9-9.89a9.83 9.83 0 017 2.9 9.83 9.83 0 012.9 7c-.01 5.45-4.45 9.87-9.9 9.87zm5.43-7.4c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.22 3.08c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.08 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35z" />
                        </svg>
                        Chat Admin Sekarang
                    </a>
                </div>

                <div class="mt-10 flex flex-col gap-5 sm:flex-row sm:items-center">
                    <div class="flex -space-x-3">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" class="h-11 w-11 rounded-full border-2 border-white object-cover" alt="Student">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" class="h-11 w-11 rounded-full border-2 border-white object-cover" alt="Student">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" class="h-11 w-11 rounded-full border-2 border-white object-cover" alt="Student">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" class="h-11 w-11 rounded-full border-2 border-white object-cover" alt="Student">
                    </div>

                    <div>
                        <div class="flex items-center gap-1 text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="mt-1 text-sm font-medium text-blue-50/80">
                            58.000+ Siswa Telah Belajar di Englishvit
                        </p>
                    </div>
                </div>
            </div>

            {{-- Right Visual --}}
{{-- Right Visual --}}
            <div class="relative hidden lg:block">
                <div class="relative ml-auto flex max-w-xl justify-center">
                    <div class="relative animate-float rounded-[2.5rem] border border-white/15 bg-white/10 px-8 pt-8 shadow-2xl shadow-blue-950/30 backdrop-blur-md">
                        {{-- soft glow inside wrapper --}}
                        <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-br from-white/10 via-transparent to-sky-300/10"></div>

                        {{-- decorative circle --}}
                        <div class="absolute right-8 top-10 h-28 w-28 rounded-full bg-sky-400/20 blur-2xl"></div>

                        {{-- image --}}
                        <img
                            src="{{ asset('top.webp') }}"
                            alt="Englishvit student"
                            class="relative z-10 h-[520px] w-full object-contain object-bottom drop-shadow-[0_25px_35px_rgba(0,0,0,0.25)]"
                        >
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom wave --}}
        <div class="absolute bottom-0 left-0 w-full">
            <svg class="h-16 w-full text-white" viewBox="0 0 1440 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,80 C240,120 480,20 720,60 C960,100 1200,40 1440,72 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>
    {{-- Study Program Section --}}
    <section id="programs" class="bg-white px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-blue-600">
                    Program Englishvit
                </p>

                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                    Pilihan Program Belajar di Englishvit
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600">
                    Pilih program yang paling cocok dengan kebutuhan belajarmu, mulai dari kelas online, private intensif,
                    hingga tes sertifikasi.
                </p>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                {{-- Card 1 --}}
                <a
                    href="#"
                    class="group relative overflow-hidden rounded-2xl border border-slate-100 bg-white p-6 shadow-lg shadow-slate-200/70 transition duration-300 hover:-translate-y-2 hover:border-yellow-200 hover:shadow-xl"
                >
                    <div class="absolute right-0 top-0 h-24 w-24 translate-x-8 -translate-y-8 rounded-full bg-yellow-100/70 transition group-hover:scale-125"></div>

                    <div class="relative flex items-start gap-4">
                        <div class="flex h-13 w-13 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-100 to-yellow-300 text-yellow-700 shadow-sm">
                            <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a7 7 0 00-7 7c0 3.86 3.14 7 7 7s7-3.14 7-7a7 7 0 00-7-7zm0 10.5A3.5 3.5 0 1112 5a3.5 3.5 0 010 7.5z" />
                                <path d="M4 20a8 8 0 0116 0v1H4v-1z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-lg font-extrabold text-slate-950">
                                Live Class
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Kelas online tatap muka dengan tutor profesional.
                            </p>
                        </div>
                    </div>
                </a>

                {{-- Card 2 --}}
                <a
                    href="#"
                    class="group relative overflow-hidden rounded-2xl border border-slate-100 bg-white p-6 shadow-lg shadow-slate-200/70 transition duration-300 hover:-translate-y-2 hover:border-pink-200 hover:shadow-xl"
                >
                    <div class="absolute right-0 top-0 h-24 w-24 translate-x-8 -translate-y-8 rounded-full bg-pink-100/70 transition group-hover:scale-125"></div>

                    <div class="relative flex items-start gap-4">
                        <div class="flex h-13 w-13 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-100 to-pink-300 text-pink-600 shadow-sm">
                            <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 3l9 5-9 5-9-5 9-5z" />
                                <path d="M6 12.5V16c0 1.66 2.69 3 6 3s6-1.34 6-3v-3.5l-6 3.33-6-3.33z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-lg font-extrabold text-slate-950">
                                One on One
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Belajar intensif dengan program private satu murid satu guru.
                            </p>
                        </div>
                    </div>
                </a>

                {{-- Card 3 --}}
                <a
                    href="#"
                    class="group relative overflow-hidden rounded-2xl border border-slate-100 bg-white p-6 shadow-lg shadow-slate-200/70 transition duration-300 hover:-translate-y-2 hover:border-sky-200 hover:shadow-xl"
                >
                    <div class="absolute right-0 top-0 h-24 w-24 translate-x-8 -translate-y-8 rounded-full bg-sky-100/70 transition group-hover:scale-125"></div>

                    <div class="relative flex items-start gap-4">
                        <div class="flex h-13 w-13 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-100 to-sky-300 text-sky-700 shadow-sm">
                            <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2zm3 5v2h8V8H8zm0 4v2h8v-2H8zm0 4v2h5v-2H8z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-lg font-extrabold text-slate-950">
                                Certification Test
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">
                                Tes sertifikasi kemampuan dengan standar yang diakui.
                            </p>
                        </div>
                    </div>
                </a>

                {{-- Card 4 --}}
                <a
                    href="#"
                    class="group relative overflow-hidden rounded-2xl border border-blue-100 bg-blue-50 p-6 shadow-lg shadow-blue-100/80 transition duration-300 hover:-translate-y-2 hover:bg-blue-100 hover:shadow-xl"
                >
                    <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-blue-300/30 transition group-hover:scale-125"></div>
                    <div class="absolute -bottom-10 left-8 h-24 w-24 rounded-full bg-white/50"></div>

                    <div class="relative flex items-center gap-4">
                        <div class="grid h-13 w-13 shrink-0 grid-cols-2 gap-1 rounded-2xl bg-white p-3 text-blue-600 shadow-sm">
                            <span class="rounded bg-current opacity-80"></span>
                            <span class="rounded bg-current opacity-60"></span>
                            <span class="rounded bg-current opacity-60"></span>
                            <span class="rounded bg-current opacity-80"></span>
                        </div>

                        <div>
                            <h3 class="text-lg font-extrabold text-blue-700">
                                Lainnya
                            </h3>
                            <p class="mt-2 text-sm font-medium text-blue-600/80">
                                Lihat semua program
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mt-16 border-t border-dashed border-slate-200"></div>
        </div>
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
                    ],
                ];

                $programImage = 'https://cdn.englishvit.com/image/oyTL54lzJYcLQCiurRPQuFfSFzICBUpot15TLugc.webp';
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
                                    src="{{ $programImage }}"
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
@endsection
