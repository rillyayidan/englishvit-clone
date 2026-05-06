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
