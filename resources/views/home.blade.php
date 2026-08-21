<x-layout>
    <x-slot name="title">Beranda - SMKN 2 Yogyakarta</x-slot>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-900 pt-20">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('hero-bg.jpg') }}" alt="Campus SMKN 2" class="w-full h-full object-cover opacity-40 scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-slate-900/40"></div>
            <div class="absolute inset-0 bg-[url('/pattern.svg')] opacity-20"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-accent font-bold text-sm mb-6 uppercase tracking-widest fade-in-up">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Sekolah Pusat Keunggulan
                </div>
                
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tighter leading-[1.1] mb-8 fade-in-up" style="animation-delay: 100ms;">
                    The Industrial <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-200">Culture School</span>
                </h1>
                
                <p class="text-lg md:text-2xl text-slate-300 font-medium mb-12 max-w-2xl leading-relaxed fade-in-up" style="animation-delay: 200ms;">
                    Mencetak generasi vokasi unggul, berkarakter, dan berjiwa wirausaha yang siap bersaing di era industri 4.0.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 fade-in-up" style="animation-delay: 300ms;">
                    <a href="/jurusan" class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-accent text-slate-900 font-black rounded-full overflow-hidden transition-transform hover:scale-105">
                        <span class="relative z-10 flex items-center gap-2">
                            Jelajahi Program Keahlian
                            <svg class="group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </span>
                        <div class="absolute inset-0 h-full w-full bg-white/20 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BENTO SECTION -->
    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
                <div class="text-accent font-bold tracking-wider uppercase text-sm mb-2">Statistik Kami</div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tight">Mengapa SMKN 2 Yogyakarta?</h2>
                <p class="text-slate-600 text-lg">Data dan fakta yang menjadikan kami pilihan terbaik untuk pendidikan vokasi masa depan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[240px]">
                <div class="md:col-span-2 lg:col-span-2 row-span-2 bg-primary rounded-3xl p-8 flex flex-col justify-between text-white relative overflow-hidden group fade-in-up">
                    <div class="absolute top-0 right-0 p-8 opacity-10 transform translate-x-4 -translate-y-4 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4 leading-tight">Sekolah Pusat Keunggulan <br/><span class="text-slate-400 font-medium text-xl">(Center of Excellence)</span></h3>
                        <p class="text-slate-300 text-lg max-w-md leading-relaxed">Terpilih sebagai SMK Pusat Keunggulan oleh Kemdikbudristek, dengan kurikulum terstandarisasi industri global dan fasilitas pembelajaran berbasis Teaching Factory (TeFa).</p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300 fade-in-up">
                    <div class="text-4xl font-black text-slate-900 mb-2">85%</div>
                    <div class="text-slate-500 font-medium">Lulusan Langsung Kerja</div>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300 fade-in-up">
                    <div class="text-4xl font-black text-slate-900 mb-2">150+</div>
                    <div class="text-slate-500 font-medium">Mitra Industri Nasional</div>
                </div>

                <div class="md:col-span-2 lg:col-span-2 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop')] bg-cover bg-center rounded-3xl relative overflow-hidden group fade-in-up">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-2xl font-bold text-white mb-2">Fasilitas Modern</h3>
                        <p class="text-slate-200">Laboratorium & Bengkel Standar Industri 4.0</p>
                    </div>
                </div>

                <div class="md:col-span-2 lg:col-span-1 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300 fade-in-up">
                    <div class="text-4xl font-black text-slate-900 mb-2">2.5K</div>
                    <div class="text-slate-500 font-medium">Siswa Aktif Berprestasi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- JURUSAN SECTION -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
                <div class="text-accent font-bold tracking-wider uppercase text-sm mb-2">Program Keahlian</div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tight">9 Jurusan <span class="text-primary">Terakreditasi A</span></h2>
                <p class="text-slate-600 text-lg">Kurikulum berbasis Teaching Factory (TEFA), fasilitas standar industri, dan kemitraan langsung dengan DUDI nasional & internasional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Program 1 -->
                <a href="#" class="block h-full bg-slate-50 border border-slate-100 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 transition-all duration-300 group fade-in-up">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center group-hover:bg-accent group-hover:scale-110 transition-all duration-300 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                        </div>
                        <span class="px-3 py-1 bg-slate-200 text-slate-600 text-xs font-bold rounded-full">4 Tahun</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-primary transition-colors">Sistem Informatika, Jaringan dan Aplikasi</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-3">Mencetak tenaga ahli IT di bidang Cloud Computing (AWS, Google Cloud), Cyber Security, Enterprise Network (Cisco), dan Software Engineering (Web & Mobile).</p>
                    <div class="flex items-center gap-1 text-sm font-bold text-slate-400 group-hover:text-accent transition-colors">Lihat Detail ></div>
                </a>
                <!-- Program 2 -->
                <a href="#" class="block h-full bg-slate-50 border border-slate-100 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 transition-all duration-300 group fade-in-up">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center group-hover:bg-accent group-hover:scale-110 transition-all duration-300 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                        </div>
                        <span class="px-3 py-1 bg-slate-200 text-slate-600 text-xs font-bold rounded-full">3 Tahun</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-primary transition-colors">Teknik Kendaraan Ringan Otomotif</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-3">Menghasilkan teknisi otomotif profesional yang menguasai teknologi Engine Management System (EMS), kendaraan hybrid, dan perbaikan chassis.</p>
                    <div class="flex items-center gap-1 text-sm font-bold text-slate-400 group-hover:text-accent transition-colors">Lihat Detail ></div>
                </a>
                <!-- Program 3 -->
                <a href="#" class="block h-full bg-slate-50 border border-slate-100 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 transition-all duration-300 group fade-in-up">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center group-hover:bg-accent group-hover:scale-110 transition-all duration-300 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M13 2v7h7"/><path d="M8 13h8"/><path d="M8 17h8"/></svg>
                        </div>
                        <span class="px-3 py-1 bg-slate-200 text-slate-600 text-xs font-bold rounded-full">3 Tahun</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-primary transition-colors">Desain Pemodelan dan Informasi Bangunan</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-3">Arsitektur dan teknik sipil era digital. Merancang gedung bertingkat menggunakan AutoCAD, SketchUp, dan BIM (Building Information Modeling).</p>
                    <div class="flex items-center gap-1 text-sm font-bold text-slate-400 group-hover:text-accent transition-colors">Lihat Detail ></div>
                </a>
            </div>
        </div>
    </section>

    <!-- PARTNER BANNER -->
    <section class="py-16 bg-white overflow-hidden border-t border-b border-slate-100 fade-in-up">
        <div class="container mx-auto px-4 text-center mb-8">
            <h3 class="text-sm font-bold tracking-widest text-slate-400 uppercase">Dipercaya & Bermitra dengan Industri Terkemuka</h3>
        </div>
        <div class="relative flex overflow-x-hidden group">
            <div class="animate-marquee whitespace-nowrap flex items-center gap-16 py-4" style="animation: marquee 30s linear infinite;">
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">PT Astra Honda Motor</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">PT Telkom Indonesia</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">Panasonic</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">Samsung Electronics</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">PT United Tractors</div>
                <!-- Duplicate for seamless scroll -->
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">PT Astra Honda Motor</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">PT Telkom Indonesia</div>
                <div class="text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors">Panasonic</div>
            </div>
        </div>
    </section>

    <style>
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.fade-in-up').forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
</x-layout>
