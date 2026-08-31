@props([
    'majors' => [
        [
            'icon' => 'computer',
            'title' => 'Teknik Komputer & Jaringan',
            'description' => 'Mempelajari infrastruktur IT, keamanan siber, dan administrasi server tingkat lanjut.'
        ],
        [
            'icon' => 'calculate',
            'title' => 'Akuntansi',
            'description' => 'Fokus pada manajemen keuangan, perpajakan, dan sistem akuntansi digital.'
        ],
        [
            'icon' => 'design_services',
            'title' => 'Multimedia',
            'description' => 'Pengembangan konten kreatif, desain grafis, animasi, dan produksi video.'
        ],
        [
            'icon' => 'directions_car',
            'title' => 'Teknik Otomotif',
            'description' => 'Pemeliharaan dan perbaikan kendaraan ringan konvensional maupun listrik.'
        ]
    ]
])

<!-- Featured Majors (Jurusan) -->
<section id="jurusan" class="bg-surface-container-lowest py-xl px-gutter border-y border-outline-variant">
    <div class="max-w-container-max mx-auto">
        <div class="text-center mb-xl">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-sm">Program Keahlian</h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-[600px] mx-auto">
                Pilihan jurusan yang dirancang khusus untuk memenuhi kebutuhan industri masa depan.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
            @foreach($majors as $major)
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-lg hover:shadow-[0_4px_12px_rgba(26,54,93,0.08)] transition-shadow group cursor-pointer">
                <div class="w-[48px] h-[48px] bg-surface-container flex items-center justify-center rounded mb-md text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                    <span class="material-symbols-outlined">{{ $major['icon'] }}</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-primary mb-sm">{{ $major['title'] }}</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">{{ $major['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
