@props(['stats' => []])

<!-- Stats Section -->
<section class="py-xl px-gutter bg-surface-container-low border-b border-outline-variant">
    <div class="max-w-container-max mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-lg text-center">
            @foreach($stats as $stat)
            <div class="p-sm bg-surface-container-lowest/60 rounded-lg border border-outline-variant/50 backdrop-blur-sm">
                <div class="text-primary mb-xs flex justify-center">
                    <span class="material-symbols-outlined text-[36px] text-secondary">{{ $stat['icon'] }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg font-bold text-primary">{{ $stat['value'] }}</div>
                <div class="font-label-md text-label-md text-on-surface-variant font-medium">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
