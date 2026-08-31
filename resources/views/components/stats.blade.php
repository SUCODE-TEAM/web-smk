@props([
    'stats' => [
        ['icon' => 'groups', 'value' => '1,200+', 'label' => 'Siswa Aktif'],
        ['icon' => 'school', 'value' => '85', 'label' => 'Tenaga Pengajar'],
        ['icon' => 'business_center', 'value' => '45+', 'label' => 'Perusahaan Mitra'],
        ['icon' => 'work', 'value' => '92%', 'label' => 'Lulusan Terserap']
    ]
])

<!-- Stats Section -->
<section class="py-xl px-gutter bg-surface-container-low">
    <div class="max-w-container-max mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-lg text-center">
            @foreach($stats as $stat)
            <div>
                <div class="text-primary mb-xs flex justify-center">
                    <span class="material-symbols-outlined text-[40px]">{{ $stat['icon'] }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg text-primary">{{ $stat['value'] }}</div>
                <div class="font-label-md text-label-md text-on-surface-variant">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
