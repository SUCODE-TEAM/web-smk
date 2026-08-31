@props(['profile' => null])

<!-- Top Navigation Bar -->
<nav class="bg-surface-container-lowest border-b border-outline-variant sticky top-0 z-50 shadow-sm">
    <div class="flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-20">
        <a href="{{ url('/') }}" class="flex items-center gap-sm group">
            <img 
                src="{{ asset('images/logo-smkn2.png') }}" 
                alt="Logo SMK Negeri 2 Yogyakarta" 
                class="w-12 h-12 object-contain drop-shadow-sm transition-transform duration-200 group-hover:scale-105" 
            />
            <div>
                <div class="font-headline-md text-headline-md font-bold text-primary group-hover:text-secondary transition-colors">
                    {{ $profile['name'] ?? 'SMK Negeri 2 Yogyakarta' }}
                </div>
                <div class="text-[11px] text-on-surface-variant font-medium tracking-wide">
                    STM JETIS &bull; EST. 1919
                </div>
            </div>
        </a>
        
        <ul class="hidden md:flex gap-lg items-center">
            <li>
                <a href="{{ url('/') }}" class="text-secondary border-b-2 border-secondary pb-1 font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Home</a>
            </li>
            <li>
                <a href="#profil" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Profil &amp; Sejarah</a>
            </li>
            <li>
                <a href="#jurusan" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">9 Jurusan</a>
            </li>
            <li>
                <a href="#berita" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Berita</a>
            </li>
            <li>
                <a href="#kontak" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Kontak</a>
            </li>
        </ul>

        <a href="https://www.smk2-yk.sch.id/" target="_blank" rel="noopener noreferrer" class="bg-primary-container text-on-primary font-label-md text-label-md h-[40px] px-sm rounded hover:opacity-90 transition-opacity inline-flex items-center gap-xs shadow-sm">
            <span>Website Resmi</span>
            <span class="material-symbols-outlined text-[16px]">open_in_new</span>
        </a>
    </div>
</nav>
