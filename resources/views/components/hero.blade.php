@props(['profile' => null])

<!-- Hero Section -->
<header class="relative bg-surface-container w-full min-h-[580px] md:h-[620px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/smkn2-hero.jpg') }}" 
            alt="Gedung Bersejarah SMK Negeri 2 Yogyakarta"
            class="w-full h-full object-cover object-center brightness-90 contrast-105" 
        />
        <!-- Multi-layer gradient overlay for high contrast and readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/70 to-primary/40"></div>
    </div>
    
    <div class="relative z-10 text-center px-gutter max-w-[880px] mx-auto text-on-primary py-xl">
        <h1 class="font-display-lg text-display-lg text-on-primary mb-md drop-shadow-lg leading-tight">
            Membentuk Generasi Unggul, Kompeten &amp; Berkarakter
        </h1>

        <p class="font-body-lg text-body-lg text-on-primary/95 mb-lg drop-shadow max-w-[760px] mx-auto">
            {{ $profile['name'] ?? 'SMK Negeri 2 Yogyakarta' }} — Pelopor pendidikan teknik menengah di Indonesia sejak 1919 (Princess Juliana School / STM Jetis) dengan kurikulum industri berstandar global.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-sm">
            <a href="#jurusan" class="bg-primary text-on-primary font-label-md text-label-md h-[48px] px-lg rounded border border-primary-fixed-dim hover:bg-primary-fixed-dim hover:text-primary transition-all inline-flex items-center gap-xs shadow-md">
                <span>Eksplorasi 9 Jurusan</span>
                <span class="material-symbols-outlined text-[20px]">arrow_downward</span>
            </a>
            <a href="#profil" class="bg-surface-container-lowest/20 backdrop-blur text-on-primary font-label-md text-label-md h-[48px] px-lg rounded border border-white/40 hover:bg-surface-container-lowest/30 transition-all inline-flex items-center gap-xs">
                <span>Profil &amp; Visi Misi</span>
            </a>
        </div>
    </div>
</header>
