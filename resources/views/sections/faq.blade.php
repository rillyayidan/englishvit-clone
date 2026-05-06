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
