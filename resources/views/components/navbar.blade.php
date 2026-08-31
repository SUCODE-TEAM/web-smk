<!-- Top Navigation Bar -->
<nav class="bg-surface-container-lowest border-b border-outline-variant sticky top-0 z-50">
    <div class="flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-20">
        <a href="{{ url('/') }}" class="font-headline-md text-headline-md font-bold text-primary">
            SMK Hebat
        </a>
        
        <ul class="hidden md:flex gap-lg items-center">
            <li>
                <a href="{{ url('/') }}" class="text-secondary border-b-2 border-secondary pb-1 font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Home</a>
            </li>
            <li>
                <a href="#profil" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Profil</a>
            </li>
            <li>
                <a href="#jurusan" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Jurusan</a>
            </li>
            <li>
                <a href="#berita" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Berita</a>
            </li>
            <li>
                <a href="#kontak" class="text-on-surface-variant hover:text-secondary font-label-md text-label-md hover:bg-surface-container-low transition-colors duration-200">Kontak</a>
            </li>
        </ul>

        <button class="bg-primary-container text-on-primary font-label-md text-label-md h-[40px] px-sm rounded hover:opacity-80 transition-opacity">
            Pendaftaran
        </button>
    </div>
</nav>
