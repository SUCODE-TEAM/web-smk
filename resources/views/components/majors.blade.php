@props(['majors' => []])

<!-- Featured Majors (Jurusan) -->
<section id="jurusan" class="bg-surface-container-lowest py-xl px-gutter border-y border-outline-variant">
    <div class="max-w-container-max mx-auto">
        <div class="text-center mb-xl">
            <div class="inline-block text-secondary font-semibold text-sm uppercase tracking-wider mb-xs">
                Program Keahlian
            </div>
            <h2 class="font-headline-lg text-headline-lg text-primary mb-sm">
                9 Program Keahlian Unggulan
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-[680px] mx-auto">
                Pilihan kompetensi keahlian teknik berstandar industri dengan kurikulum 3 tahun &amp; 4 tahun untuk mencetak teknisi profesional siap kerja.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach($majors as $major)
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-lg hover:shadow-lg hover:border-secondary/50 transition-all duration-300 group cursor-pointer flex flex-col">
                <div class="flex items-center gap-sm mb-sm">
                    <div class="w-12 h-12 bg-surface-container flex items-center justify-center rounded-lg text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors flex-shrink-0">
                        <span class="material-symbols-outlined text-[26px]">{{ $major['icon'] ?? 'school' }}</span>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-secondary bg-surface-container px-2 py-0.5 rounded">
                        {{ strtoupper($major['code'] ?? 'SMK') }}
                    </span>
                </div>
                
                <h3 class="font-headline-md text-lg font-bold text-primary mb-xs group-hover:text-secondary transition-colors">
                    {{ $major['title'] }}
                </h3>
                <p class="font-body-md text-xs text-on-surface-variant leading-relaxed flex-grow">
                    {{ $major['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
