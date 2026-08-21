<header id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <span id="logo-text" class="text-2xl font-black tracking-tighter text-white transition-colors duration-300">
                    SMKN 2 <span class="text-accent">YOGYAKARTA</span>
                </span>
            </a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a href="/tentang" class="nav-link text-sm font-semibold transition-colors duration-300 hover:text-accent text-white/90">Tentang Sekolah</a>
                <a href="/jurusan" class="nav-link text-sm font-semibold transition-colors duration-300 hover:text-accent text-white/90">Jurusan</a>
                <a href="/ppdb" id="btn-ppdb" class="px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 hover:scale-105 bg-white text-slate-900 hover:bg-white/90">Info PPDB</a>
            </nav>

            <button id="mobile-toggle" class="md:hidden p-2 rounded-md text-white transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
        </div>
    </div>
</header>

<script>
    document.addEventListener("scroll", () => {
        const nav = document.getElementById("navbar");
        const logo = document.getElementById("logo-text");
        const links = document.querySelectorAll(".nav-link");
        const btn = document.getElementById("btn-ppdb");
        const toggle = document.getElementById("mobile-toggle");

        if (window.scrollY > 50) {
            nav.classList.add("bg-white/90", "backdrop-blur-md", "shadow-sm", "py-3");
            nav.classList.remove("bg-transparent", "py-5");
            logo.classList.replace("text-white", "text-slate-900");
            links.forEach(l => l.classList.replace("text-white/90", "text-slate-600"));
            btn.classList.add("bg-slate-900", "text-white", "hover:shadow-lg", "hover:shadow-slate-900/20");
            btn.classList.remove("bg-white", "text-slate-900", "hover:bg-white/90");
            toggle.classList.replace("text-white", "text-slate-900");
        } else {
            nav.classList.remove("bg-white/90", "backdrop-blur-md", "shadow-sm", "py-3");
            nav.classList.add("bg-transparent", "py-5");
            logo.classList.replace("text-slate-900", "text-white");
            links.forEach(l => l.classList.replace("text-slate-600", "text-white/90"));
            btn.classList.remove("bg-slate-900", "text-white", "hover:shadow-lg", "hover:shadow-slate-900/20");
            btn.classList.add("bg-white", "text-slate-900", "hover:bg-white/90");
            toggle.classList.replace("text-slate-900", "text-white");
        }
    });
</script>
