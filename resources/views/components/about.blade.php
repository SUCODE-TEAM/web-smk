@props(['profile' => null])

<!-- About Us Section -->
<section id="profil" class="py-xl px-gutter max-w-container-max mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-xl items-start">
        <div>
            <div class="inline-block text-secondary font-semibold text-sm uppercase tracking-wider mb-xs">
                Profil &amp; Sejarah Sekolah
            </div>
            <h2 class="font-headline-lg text-headline-lg text-primary mb-md">
                Tradisi Keunggulan Sejak 1919
            </h2>
            
            <p class="font-body-md text-body-md text-on-surface-variant mb-md leading-relaxed">
                {{ $profile['sejarah_singkat'] ?? 'SMK Negeri 2 Yogyakarta dibangun pada tahun 1919 dengan nama Princess Juliana School (PJS). Dikenal dengan nama STM Jetis (STM 1 Yogyakarta), sekolah ini merupakan pelopor pendidikan kejuruan teknik tertua di Indonesia dan telah ditetapkan sebagai Cagar Budaya Nasional.' }}
            </p>

            <div class="bg-surface-container-low p-md rounded-lg border border-outline-variant mb-lg">
                <h3 class="font-headline-md text-headline-md text-primary mb-xs flex items-center gap-xs">
                    <span class="material-symbols-outlined text-secondary">flag</span>
                    Visi Sekolah
                </h3>
                <p class="font-body-md text-body-md text-on-surface italic">
                    "{{ $profile['visi'] ?? 'Menjadi lembaga pendidikan dan pelatihan kejuruan bertaraf internasional dan berwawasan lingkungan yang menghasilkan tamatan professional, mampu berwirausaha, beriman dan bertaqwa.' }}"
                </p>
            </div>

            <h3 class="font-headline-md text-headline-md text-primary mb-sm flex items-center gap-xs">
                <span class="material-symbols-outlined text-secondary">checklist</span>
                Misi Utama Kami
            </h3>
            
            <ul class="space-y-sm">
                @if(isset($profile['misi']) && is_array($profile['misi']))
                    @foreach($profile['misi'] as $misiItem)
                    <li class="flex items-start gap-sm text-on-surface-variant">
                        <span class="w-2 h-2 bg-secondary rounded-full mt-2 flex-shrink-0"></span>
                        <span class="font-body-md text-body-md">{{ $misiItem }}</span>
                    </li>
                    @endforeach
                @else
                    <li class="flex items-start gap-sm text-on-surface-variant">
                        <span class="w-2 h-2 bg-secondary rounded-full mt-2 flex-shrink-0"></span>
                        <span class="font-body-md text-body-md">Melaksanakan sistem manajemen mutu (SMM) berbasis ICT dan berkelanjutan.</span>
                    </li>
                    <li class="flex items-start gap-sm text-on-surface-variant">
                        <span class="w-2 h-2 bg-secondary rounded-full mt-2 flex-shrink-0"></span>
                        <span class="font-body-md text-body-md">Peningkatan fasilitas laboratorium standar industri nasional &amp; internasional.</span>
                    </li>
                    <li class="flex items-start gap-sm text-on-surface-variant">
                        <span class="w-2 h-2 bg-secondary rounded-full mt-2 flex-shrink-0"></span>
                        <span class="font-body-md text-body-md">Pembinaan karakter disiplin dan berakhlak mulia melalui kemitraan industri.</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="space-y-md">
            <!-- Building / Heritage card -->
            <div class="relative w-full aspect-video bg-surface-variant rounded-lg overflow-hidden border border-outline-variant group shadow-md">
                <img 
                    src="{{ asset('images/smkn2-hero.jpg') }}" 
                    alt="Gedung Cagar Budaya SMK Negeri 2 Yogyakarta" 
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-md text-white">
                    <span class="text-xs bg-primary/80 px-2 py-0.5 rounded w-max mb-1">Bangunan Cagar Budaya 1919</span>
                    <h4 class="font-bold text-lg">Kompleks STM Jetis (PJS)</h4>
                    <p class="text-xs text-gray-200">Jl. A.M. Sangaji No. 47, Jetis, Kota Yogyakarta</p>
                </div>
            </div>

            <!-- Headmaster quote card -->
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-lg shadow-sm">
                <div class="flex items-center gap-md">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold text-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-[30px]">person</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-headline-md text-primary font-bold">
                            {{ $profile['headmaster'] ?? 'Drs. Moh Rokhis' }}
                        </h4>
                        <p class="text-xs text-on-surface-variant">Kepala SMK Negeri 2 Yogyakarta</p>
                        <p class="text-[11px] text-outline">NIP. {{ $profile['headmaster_nip'] ?? '196909091994031011' }}</p>
                    </div>
                </div>
                <blockquote class="mt-sm text-xs text-on-surface-variant italic border-l-2 border-secondary pl-sm">
                    "Kami terus berkomitmen menghadirkan ekosistem pendidikan vokasi yang adaptif dan terintegrasi dengan kebutuhan industri masa kini."
                </blockquote>
            </div>
        </div>
    </div>
</section>
