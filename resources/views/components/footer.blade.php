@props(['profile' => null])

<!-- Footer -->
<footer id="kontak" class="bg-primary text-on-primary border-t border-primary-container">
    <div class="w-full py-xl px-gutter max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl">
            <!-- Col 1: School Identity -->
            <div>
                <div class="font-headline-md text-headline-md font-bold text-on-primary mb-xs flex items-center gap-xs">
                    <span class="material-symbols-outlined text-secondary-container">school</span>
                    {{ $profile['name'] ?? 'SMK Negeri 2 Yogyakarta' }}
                </div>
                <div class="text-xs text-primary-fixed-dim font-medium mb-sm">
                    Eks Princess Juliana School (PJS) &bull; STM 1 Yogyakarta
                </div>
                <p class="font-body-md text-xs text-on-primary/80 leading-relaxed">
                    Sekolah Menengah Kejuruan Pusat Keunggulan dengan tradisi panjang sejak tahun 1919 dalam melahirkan lulusan vokasi yang kompeten, berkarakter, dan berdaya saing global.
                </p>
            </div>

            <!-- Col 2: Address & Contact -->
            <div>
                <div class="font-bold text-sm text-secondary-container uppercase tracking-wider mb-sm">
                    Lokasi &amp; Kontak
                </div>
                <ul class="space-y-xs text-xs text-on-primary/80">
                    <li class="flex items-start gap-xs">
                        <span class="material-symbols-outlined text-[16px] text-primary-fixed-dim mt-0.5">location_on</span>
                        <span>{{ $profile['address'] ?? 'Jl. A.M. Sangaji No. 47, Cokrodiningratan, Jetis, Kota Yogyakarta, D.I. Yogyakarta 55233' }}</span>
                    </li>
                    <li class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[16px] text-primary-fixed-dim">call</span>
                        <span>(0274) 513490</span>
                    </li>
                    <li class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[16px] text-primary-fixed-dim">mail</span>
                        <span>info@smk2-yk.sch.id</span>
                    </li>
                    <li class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[16px] text-primary-fixed-dim">language</span>
                        <a href="https://www.smk2-yk.sch.id" target="_blank" class="hover:underline text-secondary-container">www.smk2-yk.sch.id</a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Quick Links -->
            <div>
                <div class="font-bold text-sm text-secondary-container uppercase tracking-wider mb-sm">
                    Tautan Cepat
                </div>
                <ul class="space-y-xs text-xs text-on-primary/80">
                    <li><a href="#profil" class="hover:text-on-primary hover:underline transition-colors">Profil &amp; Sejarah</a></li>
                    <li><a href="#jurusan" class="hover:text-on-primary hover:underline transition-colors">9 Program Keahlian</a></li>
                    <li><a href="https://www.smk2-yk.sch.id/fasilitas/sarana" target="_blank" class="hover:text-on-primary hover:underline transition-colors">Fasilitas &amp; Laboratorium</a></li>
                    <li><a href="https://www.smk2-yk.sch.id/organisasi/osis" target="_blank" class="hover:text-on-primary hover:underline transition-colors">Organisasi &amp; Kesiswaan</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-md border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-sm text-xs text-on-primary/60">
            <p>&copy; {{ date('Y') }} {{ $profile['name'] ?? 'SMK Negeri 2 Yogyakarta' }}. All rights reserved.</p>
            <p>Terakreditasi A &bull; Bangunan Cagar Budaya Indonesia</p>
        </div>
    </div>
</footer>
