@props(['partners' => null])

@php
    $defaultPartners = [
        'PT Kereta Api Indonesia (Persero)',
        'PT Astra Honda Motor',
        'PT Telkom Indonesia (Persero) Tbk',
        'PT Toyota Motor Manufacturing Indonesia',
        'PT Schneider Electric Indonesia',
        'PT Komatsu Indonesia',
        'PT PLN (Persero)',
        'PT Mayora Indah Tbk',
        'MikroTik Academy Indonesia',
        'PT United Tractors Tbk',
        'PT Panasonic Gobel Indonesia',
        'PT Gameloft Indonesia',
        'PT Bank BPD DIY',
        'PT Len Industri (Persero)',
        'PT Astra Daihatsu Motor',
    ];

    $items = (!empty($partners) && is_array($partners)) ? $partners : $defaultPartners;
    
    // Normalize to list of company name strings
    $companies = array_map(function ($item) {
        return is_array($item) ? ($item['name'] ?? '') : $item;
    }, $items);
@endphp

<!-- Section Mitra Perusahaan (Text-Only Marquee) -->
<div class="relative bg-surface-container-low/70 border-y border-outline-variant/30 py-3 overflow-hidden select-none">
    <!-- Marquee Track with Fade Gradient Edges -->
    <div class="relative w-full overflow-hidden group">
        <!-- Left Gradient Mask -->
        <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 md:w-28 bg-gradient-to-r from-surface-container-low via-surface-container-low/90 to-transparent z-10"></div>
        
        <!-- Right Gradient Mask -->
        <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-16 md:w-28 bg-gradient-to-l from-surface-container-low via-surface-container-low/90 to-transparent z-10"></div>

        <!-- Animated Scrolling Names -->
        <div class="animate-marquee flex items-center gap-6 md:gap-8">
            {{-- Loop 1 (Original items) --}}
            @foreach($companies as $company)
                <div class="flex items-center gap-6 md:gap-8 flex-shrink-0">
                    <span class="text-[15px] md:text-[16px] font-bold text-black hover:text-secondary transition-colors whitespace-nowrap tracking-wide">
                        {{ $company }}
                    </span>
                    <span class="text-neutral-400 text-[14px] font-bold select-none">•</span>
                </div>
            @endforeach

            {{-- Loop 2 (Duplicate for infinite seamless scroll) --}}
            @foreach($companies as $company)
                <div class="flex items-center gap-6 md:gap-8 flex-shrink-0">
                    <span class="text-[15px] md:text-[16px] font-bold text-black hover:text-secondary transition-colors whitespace-nowrap tracking-wide">
                        {{ $company }}
                    </span>
                    <span class="text-neutral-400 text-[14px] font-bold select-none">•</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
