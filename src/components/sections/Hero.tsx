"use client";

import Link from 'next/link';
import { ArrowRight, Play } from 'lucide-react';
import { motion } from 'framer-motion';

export default function Hero() {
  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image/Video with Overlay */}
      <div className="absolute inset-0 bg-[url('/hero-new.jpg')] bg-cover bg-center bg-no-repeat transition-transform duration-10000 hover:scale-105"></div>
      <div className="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-900/70 to-slate-950/90"></div>

      <div className="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-20">
        <div className="max-w-4xl mx-auto text-center space-y-8">
          
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5 }}
            className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-sm font-medium"
          >
            <span className="relative flex h-3 w-3">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
              <span className="relative inline-flex rounded-full h-3 w-3 bg-accent"></span>
            </span>
            Penerimaan Peserta Didik Baru 2026/2027 Segera Dibuka!
          </motion.div>

          <motion.h1 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5, delay: 0.1 }}
            className="text-5xl md:text-7xl font-black text-white tracking-tight leading-tight"
          >
            The <span className="text-transparent bg-clip-text bg-gradient-to-r from-accent to-amber-300">Industrial Culture</span> School
          </motion.h1>

          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5, delay: 0.2 }}
            className="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed"
          >
            Eks. Princess Juliana School (PJS) — Membentuk lulusan vokasi yang kompeten, berkarakter kuat, dan siap bersaing di era industri global.
          </motion.p>

          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5, delay: 0.3 }}
            className="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4"
          >
            <Link 
              href="/ppdb" 
              className="group relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-accent text-slate-900 font-bold rounded-full overflow-hidden transition-all hover:scale-105 hover:shadow-[0_0_40px_-10px_var(--accent)]"
            >
              <span className="relative z-10 flex items-center gap-2">
                Daftar Sekarang <ArrowRight size={20} className="group-hover:translate-x-1 transition-transform" />
              </span>
              <div className="absolute inset-0 h-full w-full bg-white/20 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
            </Link>
            
            <Link 
              href="/tentang" 
              className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-full transition-all hover:bg-white/20"
            >
              <Play size={20} className="fill-white" /> Lihat Profil Video
            </Link>
          </motion.div>

        </div>
      </div>

      {/* Mouse scroll indicator */}
      <motion.div 
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ delay: 1, duration: 1 }}
        className="absolute bottom-10 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center gap-2 text-white/50"
      >
        <span className="text-xs uppercase tracking-widest font-semibold">Scroll ke Bawah</span>
        <div className="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center p-1">
          <motion.div 
            animate={{ y: [0, 16, 0] }}
            transition={{ repeat: Infinity, duration: 1.5, ease: "easeInOut" }}
            className="w-1.5 h-1.5 bg-white rounded-full"
          />
        </div>
      </motion.div>
    </section>
  );
}
