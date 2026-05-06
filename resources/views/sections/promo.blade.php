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
