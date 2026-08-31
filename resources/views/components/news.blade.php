@props(['news' => []])

<!-- News Section -->
<section id="berita" class="py-xl px-gutter max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-lg">
        <div>
            <div class="inline-block text-secondary font-semibold text-sm uppercase tracking-wider mb-xs">
                Kabar &amp; Prestasi
            </div>
            <h2 class="font-headline-lg text-headline-lg text-primary">Berita &amp; Kegiatan Terbaru</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Informasi terkini seputar aktivitas akademik dan prestasi SMKN 2 Yogyakarta.</p>
        </div>
        <a href="https://www.smk2-yk.sch.id/berita" target="_blank" rel="noopener noreferrer" class="hidden md:flex items-center gap-xs font-label-md text-label-md text-secondary hover:text-primary transition-colors">
            Lihat Semua Berita <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
        @foreach($news as $item)
        <article class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col group cursor-pointer hover:shadow-lg hover:border-secondary/40 transition-all duration-300">
            <div class="aspect-[16/9] overflow-hidden bg-surface-variant relative">
                <img 
                    src="{{ $item['image'] }}" 
                    alt="{{ $item['alt'] ?? $item['title'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                />
            </div>
            <div class="p-md flex-grow flex flex-col">
                <time class="font-caption text-caption text-secondary font-semibold mb-xs">{{ $item['date'] }}</time>
                <h3 class="font-headline-md text-base font-bold text-on-surface mb-sm line-clamp-2 group-hover:text-secondary transition-colors">
                    {{ $item['title'] }}
                </h3>
                <p class="font-body-md text-xs text-on-surface-variant line-clamp-3 mt-auto leading-relaxed">
                    {{ $item['summary'] }}
                </p>
            </div>
        </article>
        @endforeach
    </div>

    <a href="https://www.smk2-yk.sch.id/berita" target="_blank" rel="noopener noreferrer" class="mt-lg w-full md:hidden flex justify-center items-center gap-xs font-label-md text-label-md text-secondary border border-secondary rounded py-[8px]">
        Lihat Semua Berita <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
    </a>
</section>
