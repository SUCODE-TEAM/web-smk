@props([
    'newsList' => [
        [
            'date' => '15 Oktober 2024',
            'title' => 'Tim Robotik SMK Hebat Meraih Juara 1 Nasional',
            'summary' => 'Prestasi membanggakan kembali ditorehkan oleh siswa-siswi jurusan Mekatronika dalam ajang kompetisi robotik tingkat nasional tahun ini.',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuASF6hE9RQm2SQLA6Z87Wyh6WT7-h1zqBgKVv7BKBJijVaydJ6A5Oej018esNgMObkVX6ddGdwo_DCvhn4SaKw7zABEM-LV2eS0RTYFI-2Dbmw8RXGFucA39bAMSMYguyhNJr-xWBfZthJk07VlramvTM_Z2uFypM4UjTtggax3crc1DioGcxFtVjGC8pMkfHhZdVNSpuh_Eh8RxCT3P1qu5ahnQVrHu0_W_6p-8_kl3W5dq3vi2WCSVQ',
            'alt' => 'Siswa berpartisipasi dalam kompetisi robotik'
        ],
        [
            'date' => '10 Oktober 2024',
            'title' => 'Kunjungan Industri: Persiapan Menghadapi Dunia Kerja',
            'summary' => 'Program guru tamu dari perusahaan mitra untuk memberikan wawasan langsung mengenai budaya kerja dan ekspektasi industri kepada siswa kelas XII.',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDRnpWnw2uH3I3CD6IijxlTxQJy6lPpvWAYhs1Cy0GLYn5zbC_eM7lC_8L-FdyEKsHJNzCfCfBEkPdRuk1zahluMCSpzSYlULzzym19hIvzwxE6uSZ-MhvURR0VfnuU4vWQxlOuL9BXKuDAeheoNg0bvv3KIh22TgoGSwbfiTogVPaO-_IF4qQav3b4hqGpChvjuzY_vIUSSsZcez0GcRQ9yPEGF178X8jGj80q4ZPXTPcaW27j0lLHWQ',
            'alt' => 'Kunjungan Industri dari praktisi profesional'
        ],
        [
            'date' => '05 Oktober 2024',
            'title' => 'Pameran Proyek Akhir Siswa Jurusan Multimedia',
            'summary' => 'Menampilkan karya-karya terbaik berupa aplikasi, animasi, dan desain UI/UX hasil karya siswa tingkat akhir sebagai syarat kelulusan.',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDRX0rGlk-G8ySx8AFWk59nYEYYS5zzkwL9kwskV99MZEhLTbsHJMMYHmJtl9YtN5bM63l-LXXvApg5zvZbJnuUfIEKja99kFqRFGmLwr7yDdj40jBALN5isghKrRUv04Rw9oHZ9OJSGbOsMJm2tPfiTrQPnIb-a4Qch2GY7We9b6RbfHIsijfOnlDna5CIczHciTsWOs8OVaoAGqz81uO57dpUPj9Ph_AAc83wiTfFmdZ46C9MkTMTTg',
            'alt' => 'Pameran tugas akhir siswa jurusan multimedia'
        ]
    ]
])

<!-- News Section -->
<section id="berita" class="py-xl px-gutter max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-lg">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-primary">Berita Terbaru</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Informasi dan kegiatan terkini dari lingkungan sekolah.</p>
        </div>
        <a href="#" class="hidden md:flex items-center gap-xs font-label-md text-label-md text-secondary hover:text-primary transition-colors">
            Lihat Semua Berita <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
        @foreach($newsList as $news)
        <article class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col group cursor-pointer hover:shadow-[0_4px_12px_rgba(26,54,93,0.08)] transition-shadow">
            <div class="aspect-[16/9] overflow-hidden bg-surface-variant">
                <img 
                    src="{{ $news['image'] }}" 
                    alt="{{ $news['alt'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                />
            </div>
            <div class="p-md flex-grow flex flex-col">
                <time class="font-caption text-caption text-outline mb-xs">{{ $news['date'] }}</time>
                <h3 class="font-headline-md text-headline-md text-on-surface mb-sm line-clamp-2">{{ $news['title'] }}</h3>
                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mt-auto">{{ $news['summary'] }}</p>
            </div>
        </article>
        @endforeach
    </div>

    <a href="#" class="mt-lg w-full md:hidden flex justify-center items-center gap-xs font-label-md text-label-md text-secondary border border-secondary rounded py-[8px]">
        Lihat Semua Berita <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
    </a>
</section>
