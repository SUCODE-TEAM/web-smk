@props(['profile' => null])

<!-- About Us Section -->
<section id="profil" class="py-xl px-gutter max-w-container-max mx-auto space-y-lg">
    
    <!-- Row 1: Top Row (Card Kepala Sekolah & Foto Gedung Cagar Budaya - Sama Tinggi & Sudut Tajam/Crisp) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-lg lg:gap-xl items-stretch">
        
        <!-- Top Left: Card Kepala Sekolah -->
        <div class="bg-surface-container-lowest border border-outline-variant/70 p-6 md:p-7 rounded-[4px] shadow-xs flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-18 h-18 md:w-20 md:h-20 rounded-[4px] overflow-hidden border border-secondary/40 shadow-xs flex-shrink-0 bg-surface-container">
                        <img 
                            src="{{ asset('images/kepala-sekolah.jpg') }}" 
                            alt="{{ $profile['headmaster'] ?? 'Drs. Moh Rokhis' }}" 
                            class="w-full h-full object-cover object-top"
                        />
                    </div>
                    <div>
                        <span class="inline-block text-[11px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-0.5 rounded-[2px] mb-1">
                            Pimpinan Sekolah
                        </span>
                        <h4 class="font-headline-md text-headline-md text-primary font-bold leading-tight">
                            {{ $profile['headmaster'] ?? 'Drs. Moh Rokhis' }}
                        </h4>
                        <p class="text-xs md:text-sm text-on-surface-variant font-medium">Kepala SMK Negeri 2 Yogyakarta</p>
                        <p class="text-[11px] text-outline">NIP. {{ $profile['headmaster_nip'] ?? '196909091994031011' }}</p>
                    </div>
                </div>

                <blockquote class="text-xs md:text-sm text-on-surface-variant italic border-l-3 border-secondary pl-4 py-1.5 leading-relaxed bg-surface-container-low/40 rounded-r-[2px]">
                    "Kami terus berkomitmen menghadirkan ekosistem pendidikan vokasi yang adaptif, berkarakter, dan terintegrasi langsung dengan kebutuhan industri global guna mencetak generasi teknisi unggul dan berdaya saing."
                </blockquote>
            </div>

            <!-- Badges Info Kepala Sekolah -->
            <div class="mt-4 pt-3 border-t border-outline-variant/30 flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-primary bg-primary/5 px-2.5 py-1 rounded-[2px] border border-primary/15">
                    <span class="material-symbols-outlined text-[14px] text-secondary">verified</span>
                    SMK Pusat Keunggulan
                </span>
                <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-primary bg-primary/5 px-2.5 py-1 rounded-[2px] border border-primary/15">
                    <span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
                    Cagar Budaya 1919
                </span>
                <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-primary bg-primary/5 px-2.5 py-1 rounded-[2px] border border-primary/15">
                    <span class="material-symbols-outlined text-[14px] text-secondary">workspace_premium</span>
                    Akreditasi A
                </span>
            </div>
        </div>

        <!-- Top Right: Foto Gedung Cagar Budaya (Sudut Tajam/Crisp) -->
        <div class="relative w-full min-h-[260px] md:min-h-[300px] bg-surface-variant rounded-[4px] overflow-hidden border border-outline-variant/70 group shadow-md flex flex-col justify-end h-full">
            <img 
                src="{{ asset('images/smkn2-hero.jpg') }}" 
                alt="Gedung Cagar Budaya SMK Negeri 2 Yogyakarta" 
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
            />
            <div class="relative z-10 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-6 text-white">
                <span class="text-[11px] bg-secondary px-2.5 py-0.5 rounded-[2px] font-semibold w-max mb-1.5 shadow-xs">
                    Bangunan Cagar Budaya 1919
                </span>
                <h4 class="font-bold text-lg md:text-xl leading-tight">Kompleks STM Jetis (PJS)</h4>
                <p class="text-xs text-gray-200 mt-0.5">Jl. A.M. Sangaji No. 47, Jetis, Kota Yogyakarta</p>
            </div>
        </div>

    </div>

    <!-- Row 2: Bottom Row (Profil & Sejarah + Visi vs Misi Utama Kami - Sudut Tajam/Crisp) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-lg lg:gap-xl items-stretch">
        
        <!-- Bottom Left: Profil & Sejarah + Visi Sekolah -->
        <div class="bg-surface-container-lowest border border-outline-variant/70 p-6 md:p-7 rounded-[4px] shadow-xs flex flex-col justify-between h-full">
            <div>
                <div class="inline-block text-secondary font-semibold text-xs md:text-sm uppercase tracking-wider mb-1">
                    Profil &amp; Sejarah Sekolah
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-3">
                    Tradisi Keunggulan Sejak 1919
                </h2>
                
                <p class="font-body-md text-body-md text-on-surface-variant mb-4 leading-relaxed text-justify md:text-left">
                    {{ $profile['sejarah_singkat'] ?? 'SMK Negeri 2 Yogyakarta dibangun pada tahun 1919 dengan nama Princess Juliana School (PJS). Dikenal dengan nama STM Jetis (STM 1 Yogyakarta), sekolah ini merupakan pelopor pendidikan kejuruan teknik tertua di Indonesia dan telah ditetapkan sebagai Cagar Budaya Nasional serta SMK Pusat Keunggulan.' }}
                </p>
            </div>

            <!-- Visi Sekolah Box -->
            <div class="bg-surface-container-low/70 p-4 md:p-5 rounded-[4px] border border-outline-variant/60 mt-auto">
                <h3 class="font-headline-md text-[17px] text-primary mb-1.5 flex items-center gap-2 font-bold">
                    <span class="material-symbols-outlined text-secondary text-[20px]">flag</span>
                    Visi Sekolah
                </h3>
                <p class="font-body-md text-[14px] md:text-[15px] text-on-surface italic leading-relaxed">
                    "{{ $profile['visi'] ?? 'Menjadi lembaga pendidikan dan pelatihan kejuruan bertaraf internasional dan berwawasan lingkungan yang menghasilkan tamatan professional, mampu berwirausaha, beriman dan bertaqwa.' }}"
                </p>
            </div>
        </div>

        <!-- Bottom Right: Misi Utama Kami -->
        <div class="bg-surface-container-lowest border border-outline-variant/70 p-6 md:p-7 rounded-[4px] shadow-xs flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-headline-md text-headline-md text-primary flex items-center gap-2 font-bold">
                        <span class="material-symbols-outlined text-secondary text-[26px]">checklist</span>
                        Misi Utama Kami
                    </h3>
                    <span class="text-[11px] font-semibold text-secondary bg-secondary/10 px-2 py-0.5 rounded-[2px]">
                        7 Pilar Misi
                    </span>
                </div>
                
                <ul class="space-y-3">
                    @if(isset($profile['misi']) && is_array($profile['misi']))
                        @foreach($profile['misi'] as $misiItem)
                        <li class="flex items-start gap-3 text-on-surface-variant">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-[1px] mt-2 flex-shrink-0"></span>
                            <span class="font-body-md text-[14px] md:text-[15px] leading-relaxed">{{ $misiItem }}</span>
                        </li>
                        @endforeach
                    @else
                        <li class="flex items-start gap-3 text-on-surface-variant">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-[1px] mt-2 flex-shrink-0"></span>
                            <span class="font-body-md text-[14px] md:text-[15px] leading-relaxed">Melaksanakan sistem manajemen mutu (SMM) berbasis ICT dan berkelanjutan.</span>
                        </li>
                        <li class="flex items-start gap-3 text-on-surface-variant">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-[1px] mt-2 flex-shrink-0"></span>
                            <span class="font-body-md text-[14px] md:text-[15px] leading-relaxed">Meningkatkan kualitas tenaga pendidik dan kependidikan yang memenuhi kualifikasi standar.</span>
                        </li>
                        <li class="flex items-start gap-3 text-on-surface-variant">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-[1px] mt-2 flex-shrink-0"></span>
                            <span class="font-body-md text-[14px] md:text-[15px] leading-relaxed">Peningkatan fasilitas laboratorium standar industri nasional &amp; internasional.</span>
                        </li>
                        <li class="flex items-start gap-3 text-on-surface-variant">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-[1px] mt-2 flex-shrink-0"></span>
                            <span class="font-body-md text-[14px] md:text-[15px] leading-relaxed">Pembinaan karakter disiplin dan berakhlak mulia melalui kemitraan industri.</span>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="mt-4 pt-3 border-t border-outline-variant/30 flex items-center justify-between text-[11px] text-on-surface-variant/80">
                <span>Pendidikan Vokasi Terpadu</span>
                <span class="font-semibold text-primary">ISTIMEWA • PASTI • BISA</span>
            </div>
        </div>

    </div>

</section>
