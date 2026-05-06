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

    {{-- Promo Section --}}
    <section id="promo" class="bg-white px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <a
                href="#programs"
                class="group relative block overflow-hidden rounded-[2rem] bg-[#043b82] shadow-2xl shadow-blue-900/20"
            >
                {{-- Background effects --}}
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-700 to-cyan-500"></div>
                <div class="absolute inset-0 opacity-20"
                    style="background-image: radial-gradient(circle at 20px 20px, white 2px, transparent 0); background-size: 42px 42px;">
                </div>

                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/15"></div>
                <div class="absolute -bottom-28 -left-20 h-72 w-72 rounded-full bg-cyan-300/20 blur-xl"></div>
                <div class="absolute right-1/3 top-10 h-24 w-24 rounded-full bg-yellow-300/20 blur-2xl"></div>

                <div class="relative z-10 grid gap-10 px-6 py-12 sm:px-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:px-16 lg:py-16">
                    {{-- Left Content --}}
                    <div class="text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/15 px-4 py-2 text-sm font-bold text-white backdrop-blur">
                            <span class="h-2 w-2 rounded-full bg-yellow-300 animate-pulse"></span>
                            Promo Terbatas Hari Ini
                        </div>

                        <h2 class="mt-6 text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">
                            Diskon Special Hingga
                            <span class="text-yellow-300">70%</span>
                        </h2>

                        <p class="mt-5 max-w-2xl text-base leading-8 text-blue-50 sm:text-lg">
                            Lebih hemat daftar program pilihan Englishvit. Cocok untuk kamu yang ingin mulai belajar
                            sekarang dengan harga lebih ringan.
                        </p>

                        <div class="mt-8 inline-flex items-center gap-3 rounded-xl bg-yellow-400 px-6 py-4 text-base font-extrabold text-blue-950 shadow-lg shadow-yellow-500/20 transition group-hover:-translate-y-1 group-hover:bg-yellow-300">
                            Lihat Promo Sekarang
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>

                    {{-- Right Countdown Card --}}
                    <div class="rounded-[1.5rem] border border-white/25 bg-white/15 p-5 shadow-xl backdrop-blur-md sm:p-6">
                        <p class="text-center text-sm font-bold uppercase tracking-[0.25em] text-blue-50">
                            Berakhir dalam
                        </p>

                        <div class="mt-6 grid grid-cols-4 gap-3">
                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm">
                                <span id="promo-days" class="block text-3xl font-black text-blue-700">03</span>
                                <span class="mt-1 block text-xs font-bold text-slate-500">Hari</span>
                            </div>

                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm">
                                <span id="promo-hours" class="block text-3xl font-black text-blue-700">12</span>
                                <span class="mt-1 block text-xs font-bold text-slate-500">Jam</span>
                            </div>

                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm">
                                <span id="promo-mins" class="block text-3xl font-black text-blue-700">45</span>
                                <span class="mt-1 block text-xs font-bold text-slate-500">Menit</span>
                            </div>

                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm">
                                <span id="promo-secs" class="block text-3xl font-black text-blue-700">30</span>
                                <span class="mt-1 block text-xs font-bold text-slate-500">Detik</span>
                            </div>
                        </div>

                        <div class="mt-6 rounded-2xl border border-white/20 bg-blue-950/30 p-4 text-center text-sm font-semibold text-blue-50">
                            Kuota promo terbatas. Harga dapat berubah sewaktu-waktu.
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const daysEl = document.getElementById('promo-days');
            const hoursEl = document.getElementById('promo-hours');
            const minsEl = document.getElementById('promo-mins');
            const secsEl = document.getElementById('promo-secs');

            if (!daysEl || !hoursEl || !minsEl || !secsEl) return;

            const promoEndDate = new Date();
            promoEndDate.setDate(promoEndDate.getDate() + 3);
            promoEndDate.setHours(23, 59, 59, 999);

            const pad = (number) => String(number).padStart(2, '0');

            const updateCountdown = () => {
                const now = new Date().getTime();
                const distance = promoEndDate.getTime() - now;

                if (distance <= 0) {
                    daysEl.textContent = '00';
                    hoursEl.textContent = '00';
                    minsEl.textContent = '00';
                    secsEl.textContent = '00';
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((distance / (1000 * 60)) % 60);
                const seconds = Math.floor((distance / 1000) % 60);

                daysEl.textContent = pad(days);
                hoursEl.textContent = pad(hours);
                minsEl.textContent = pad(minutes);
                secsEl.textContent = pad(seconds);
            };

            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    </script>
    {{-- Why Choose Us Section --}}
    <section id="why-us" class="bg-white px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-3xl text-center">

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                    Kenapa Harus Belajar di Englishvit?
                </h2>

                <p class="mt-4 text-base leading-7 text-slate-600">
                    Dari semua platform belajar bahasa Inggris yang ada, berikut alasan kenapa Englishvit jadi pilihan yang tepat.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <span class="rounded-full border border-blue-100 bg-blue-50 px-4 py-2 text-sm font-bold text-blue-700">
                        58.000+ siswa
                    </span>
                    <span class="rounded-full border border-yellow-100 bg-yellow-50 px-4 py-2 text-sm font-bold text-yellow-700">
                        Garansi belajar
                    </span>
                    <span class="rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2 text-sm font-bold text-emerald-700">
                        Tutor profesional
                    </span>
                </div>
            </div>

            @php
                $reasons = [
                    [
                        'title' => 'Garansi 100% Uang Kembali',
                        'description' => 'Englishvit memberikan garansi uang kembali untuk program kelas online yang sesuai dengan ketentuan program.',
                        'icon' => 'shield',
                        'color' => 'yellow',
                    ],
                    [
                        'title' => 'Media Belajar Canggih',
                        'description' => 'Materi belajar dapat diakses dengan mudah melalui website dan aplikasi belajar Englishvit.',
                        'icon' => 'device',
                        'color' => 'blue',
                    ],
                    [
                        'title' => 'Pengajar Profesional',
                        'description' => 'Tutor Englishvit memiliki pengalaman mengajar dan background pendidikan yang relevan dengan bahasa Inggris.',
                        'icon' => 'teacher',
                        'color' => 'purple',
                    ],
                    [
                        'title' => 'Kurikulum Terapan',
                        'description' => 'Kurikulum disusun agar siswa tidak hanya paham teori, tetapi juga mampu langsung praktik sesuai kebutuhan.',
                        'icon' => 'board',
                        'color' => 'emerald',
                    ],
                    [
                        'title' => 'Biaya Sangat Terjangkau',
                        'description' => 'Englishvit menghadirkan program belajar berkualitas dengan harga yang tetap bersahabat untuk berbagai kebutuhan.',
                        'icon' => 'coin',
                        'color' => 'rose',
                    ],
                    [
                        'title' => 'Terverifikasi Dinas Pendidikan',
                        'description' => 'Englishvit terdaftar sebagai Lembaga Pendidikan Nonformal dan telah diverifikasi oleh DPMPTSP.',
                        'icon' => 'verified',
                        'color' => 'sky',
                        'featured' => true,
                    ],
                ];
            @endphp

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($reasons as $reason)
                    <article
                        class="
                            group relative overflow-hidden rounded-3xl border p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl
                            {{ isset($reason['featured']) ? 'border-blue-200 bg-blue-600 text-white shadow-blue-100' : 'border-slate-100 bg-white text-slate-950 shadow-slate-200/70' }}
                        "
                    >
                        <div class="absolute -right-12 -top-12 h-32 w-32 rounded-full {{ isset($reason['featured']) ? 'bg-white/10' : 'bg-blue-50' }} transition group-hover:scale-125"></div>

                        <div
                            class="
                                relative flex h-16 w-16 items-center justify-center rounded-2xl shadow-sm
                                @if ($reason['color'] === 'yellow') bg-yellow-100 text-yellow-600
                                @elseif ($reason['color'] === 'blue') bg-blue-100 text-blue-600
                                @elseif ($reason['color'] === 'purple') bg-purple-100 text-purple-600
                                @elseif ($reason['color'] === 'emerald') bg-emerald-100 text-emerald-600
                                @elseif ($reason['color'] === 'rose') bg-rose-100 text-rose-600
                                @else bg-white/20 text-white
                                @endif
                            "
                        >
                            @if ($reason['icon'] === 'shield')
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4v5c0 5-3.5 8.5-7 9-3.5-.5-7-4-7-9V7l7-4z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                </svg>
                            @elseif ($reason['icon'] === 'device')
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8h6M9 12h6M9 16h3" />
                                </svg>
                            @elseif ($reason['icon'] === 'teacher')
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c3.866 0 7 1.79 7 4v1H5v-1c0-2.21 3.134-4 7-4z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11a4 4 0 100-8 4 4 0 000 8z" />
                                </svg>
                            @elseif ($reason['icon'] === 'board')
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16v11H4z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 20h8M12 16v4" />
                                </svg>
                            @elseif ($reason['icon'] === 'coin')
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3.866 0-7 1.343-7 3s3.134 3 7 3 7-1.343 7-3-3.134-3-7-3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 11v4c0 1.657 3.134 3 7 3s7-1.343 7-3v-4" />
                                </svg>
                            @else
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l2.2 2.1 3-.4.7 3 2.6 1.5-1.3 2.8 1.3 2.8-2.6 1.5-.7 3-3-.4L12 21l-2.2-2.1-3 .4-.7-3-2.6-1.5L4.8 12 3.5 9.2 6.1 7.7l.7-3 3 .4L12 3z" />
                                </svg>
                            @endif
                        </div>

                        <h3 class="relative mt-8 text-2xl font-extrabold leading-snug">
                            {{ $reason['title'] }}
                        </h3>

                        <p class="relative mt-4 text-base leading-8 {{ isset($reason['featured']) ? 'text-blue-50' : 'text-slate-600' }}">
                            {{ $reason['description'] }}
                        </p>

                        @if (isset($reason['featured']))
                            <div class="relative mt-6 rounded-2xl bg-white/15 p-4 text-sm font-semibold text-white">
                                No: 3/IZIN/0021/02/2025
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Free Level Check CTA --}}
    <section id="level-check" class="bg-white px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <a
                href="#programs"
                class="group relative block overflow-hidden rounded-[2rem] bg-gradient-to-br from-blue-700 via-blue-600 to-sky-500 p-1 shadow-2xl shadow-blue-900/20"
            >
                <div class="relative overflow-hidden rounded-[1.8rem] bg-blue-950/10 px-6 py-10 sm:px-10 lg:px-14 lg:py-12">
                    {{-- Decorative background --}}
                    <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-white/15 blur-2xl"></div>
                    <div class="absolute -bottom-24 -left-16 h-72 w-72 rounded-full bg-yellow-300/20 blur-2xl"></div>

                    <div
                        class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 28px 28px;"
                    ></div>

                    <div class="relative z-10 grid gap-10 lg:grid-cols-[1fr_0.85fr] lg:items-center">
                        {{-- Left content --}}
                        <div class="text-center lg:text-left">
                            <div class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/15 px-4 py-2 text-sm font-bold text-white backdrop-blur">
                                <span class="h-2 w-2 rounded-full bg-yellow-300 animate-pulse"></span>
                                Gratis untuk pemula
                            </div>

                            <h2 class="mt-6 text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">
                                Cek Level Bahasa Inggrismu
                                <span class="text-yellow-300">Gratis</span>
                            </h2>

                            <p class="mt-5 max-w-2xl text-base leading-8 text-blue-50 sm:text-lg">
                                Jawab beberapa pertanyaan singkat dan temukan program Englishvit yang paling cocok
                                untuk tujuan belajarmu.
                            </p>

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:justify-center lg:justify-start">
                                <span class="inline-flex items-center justify-center gap-2 rounded-xl bg-yellow-400 px-6 py-4 text-base font-extrabold text-blue-950 shadow-lg shadow-yellow-500/20 transition group-hover:-translate-y-1 group-hover:bg-yellow-300">
                                    Mulai Tes Gratis
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>

                                <span class="inline-flex items-center justify-center rounded-xl border border-white/30 bg-white/10 px-6 py-4 text-base font-bold text-white backdrop-blur transition group-hover:bg-white/15">
                                    Hanya 3 menit
                                </span>
                            </div>
                        </div>

                        {{-- Right visual card --}}
                        <div class="relative">
                            <div class="rounded-[1.5rem] border border-white/20 bg-white p-6 shadow-2xl">
                                <div class="flex items-center justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-[0.18em] text-blue-600">
                                            Level Preview
                                        </p>
                                        <h3 class="mt-2 text-2xl font-extrabold text-slate-950">
                                            English Skill Check
                                        </h3>
                                    </div>

                                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l2.2 2.1 3-.4.7 3 2.6 1.5-1.3 2.8 1.3 2.8-2.6 1.5-.7 3-3-.4L12 21l-2.2-2.1-3 .4-.7-3-2.6-1.5L4.8 12 3.5 9.2 6.1 7.7l.7-3 3 .4L12 3z" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="mt-8 space-y-4">
                                    <div>
                                        <div class="mb-2 flex items-center justify-between text-sm font-bold">
                                            <span class="text-slate-700">Speaking</span>
                                            <span class="text-blue-600">Intermediate</span>
                                        </div>
                                        <div class="h-3 overflow-hidden rounded-full bg-slate-100">
                                            <div class="h-full w-[68%] rounded-full bg-blue-600"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mb-2 flex items-center justify-between text-sm font-bold">
                                            <span class="text-slate-700">Grammar</span>
                                            <span class="text-blue-600">Basic+</span>
                                        </div>
                                        <div class="h-3 overflow-hidden rounded-full bg-slate-100">
                                            <div class="h-full w-[52%] rounded-full bg-yellow-400"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mb-2 flex items-center justify-between text-sm font-bold">
                                            <span class="text-slate-700">Vocabulary</span>
                                            <span class="text-blue-600">Good</span>
                                        </div>
                                        <div class="h-3 overflow-hidden rounded-full bg-slate-100">
                                            <div class="h-full w-[74%] rounded-full bg-emerald-500"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-7 rounded-2xl bg-slate-50 p-4">
                                    <p class="text-sm font-semibold leading-6 text-slate-600">
                                        Rekomendasi program akan disesuaikan dengan targetmu: speaking, IELTS,
                                        grammar, career English, atau daily conversation.
                                    </p>
                                </div>
                            </div>

                            <div class="absolute -right-4 -top-5 hidden rounded-2xl bg-yellow-400 px-4 py-3 text-sm font-black text-blue-950 shadow-xl sm:block">
                                A1 → C2
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    {{-- FAQ Section --}}
    <section id="faq" class="bg-blue-50 px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-5xl">
            <div class="text-center">

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                    Frequently Asked Questions
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600">
                    Berikut adalah beberapa pertanyaan umum yang sering diajukan oleh customer kepada Englishvit.
                </p>
            </div>

            @php
                $faqs = [
                    [
                        'question' => 'Apa itu Englishvit?',
                        'answer' => 'Englishvit adalah platform belajar bahasa Inggris yang berfokus pada pembelajaran praktis, aplikatif, dan mudah diikuti untuk berbagai kebutuhan seperti speaking, grammar, IELTS, TOEFL, hingga English for career.',
                    ],
                    [
                        'question' => 'Sejak kapan Englishvit didirikan?',
                        'answer' => 'Englishvit telah berkembang sebagai lembaga pendidikan bahasa Inggris online yang membantu ribuan siswa meningkatkan kemampuan bahasa Inggris mereka melalui kelas dan program digital.',
                    ],
                    [
                        'question' => 'Mengapa saya harus kursus di Englishvit?',
                        'answer' => 'Karena Englishvit menawarkan metode belajar yang praktis, tutor profesional, pilihan program yang fleksibel, serta materi yang dirancang agar siswa bisa langsung menerapkan bahasa Inggris dalam kehidupan nyata.',
                    ],
                    [
                        'question' => 'Bagaimana sistem pembelajaran di Englishvit?',
                        'answer' => 'Pembelajaran dilakukan secara online melalui program yang terstruktur. Siswa dapat mengikuti kelas, mengakses materi, latihan, dan mendapatkan arahan sesuai program yang dipilih.',
                    ],
                    [
                        'question' => 'Apa itu Practical Learning?',
                        'answer' => 'Practical Learning adalah pendekatan belajar yang menekankan praktik langsung. Jadi siswa tidak hanya mempelajari teori, tetapi juga dilatih menggunakan bahasa Inggris dalam situasi nyata.',
                    ],
                    [
                        'question' => 'Bisakah saya percaya dengan kualitas pengajar di Englishvit?',
                        'answer' => 'Ya. Pengajar Englishvit dipilih berdasarkan kemampuan bahasa Inggris, pengalaman mengajar, dan kemampuan membimbing siswa agar proses belajar terasa nyaman dan efektif.',
                    ],
                    [
                        'question' => 'Paket belajar bahasa Inggris mana yang tepat untuk saya?',
                        'answer' => 'Paket yang tepat bergantung pada tujuan belajarmu. Untuk speaking, pilih program percakapan. Untuk persiapan tes, pilih IELTS atau TOEFL. Untuk kebutuhan kerja, pilih program English for Career.',
                    ],
                    [
                        'question' => 'Apa saja paket belajar yang disediakan oleh Englishvit?',
                        'answer' => 'Englishvit menyediakan berbagai program seperti Live Class, One on One, Certification Test, Learning Package, Smart Book, dan Subscription.',
                    ],
                    [
                        'question' => 'Apakah Englishvit merupakan lembaga pendidikan resmi?',
                        'answer' => 'Englishvit terdaftar sebagai lembaga pendidikan nonformal dan memiliki informasi legalitas yang dapat digunakan sebagai bagian dari kepercayaan calon siswa.',
                    ],
                ];
            @endphp

            <div class="mt-12 space-y-4">
                @foreach ($faqs as $index => $faq)
                    <div
                        class="faq-item overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-blue-100 transition duration-300 hover:shadow-md"
                        data-open="{{ $index === 0 ? 'true' : 'false' }}"
                    >
                        <button
                            type="button"
                            class="faq-button flex w-full items-center justify-between gap-6 px-6 py-5 text-left sm:px-7"
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                        >
                            <span class="text-base font-medium text-slate-950 sm:text-lg">
                                {{ $faq['question'] }}
                            </span>

                            <span class="faq-icon relative flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-blue-600 text-white transition duration-300">
                                <span class="absolute h-0.5 w-3.5 rounded-full bg-current"></span>
                                <span class="faq-icon-vertical absolute h-3.5 w-0.5 rounded-full bg-current transition duration-300"></span>
                            </span>
                        </button>

                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pb-6 text-base leading-8 text-slate-700 sm:px-7">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqItems = document.querySelectorAll('.faq-item');

            const closeItem = (item) => {
                const button = item.querySelector('.faq-button');
                const answer = item.querySelector('.faq-answer');
                const verticalLine = item.querySelector('.faq-icon-vertical');
                const icon = item.querySelector('.faq-icon');

                item.dataset.open = 'false';
                button.setAttribute('aria-expanded', 'false');
                answer.style.maxHeight = '0px';
                verticalLine.style.transform = 'scaleY(1)';
                icon.classList.remove('rotate-180');
            };

            const openItem = (item) => {
                const button = item.querySelector('.faq-button');
                const answer = item.querySelector('.faq-answer');
                const verticalLine = item.querySelector('.faq-icon-vertical');
                const icon = item.querySelector('.faq-icon');

                item.dataset.open = 'true';
                button.setAttribute('aria-expanded', 'true');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                verticalLine.style.transform = 'scaleY(0)';
                icon.classList.add('rotate-180');
            };

            faqItems.forEach((item) => {
                const button = item.querySelector('.faq-button');

                if (item.dataset.open === 'true') {
                    openItem(item);
                }

                button.addEventListener('click', () => {
                    const isOpen = item.dataset.open === 'true';

                    faqItems.forEach(closeItem);

                    if (!isOpen) {
                        openItem(item);
                    }
                });
            });

            window.addEventListener('resize', () => {
                faqItems.forEach((item) => {
                    if (item.dataset.open === 'true') {
                        const answer = item.querySelector('.faq-answer');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            });
        });
    </script>
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
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-blue-600">
                    Media Coverage
                </p>

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

@endsection
