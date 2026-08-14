"use client";

import { Users, GraduationCap, Building2, Trophy, ArrowUpRight } from 'lucide-react';
import { motion } from 'framer-motion';

export default function StatsBento() {
  return (
    <section className="py-24 bg-slate-50">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div className="text-center max-w-2xl mx-auto mb-16">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-accent font-bold tracking-wider uppercase text-sm mb-2"
          >
            Statistik Kami
          </motion.div>
          <motion.h2 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.1 }}
            className="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tight"
          >
            Mengapa SMKN 2 Yogyakarta?
          </motion.h2>
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
            className="text-slate-600 text-lg"
          >
            Data dan fakta yang menjadikan kami pilihan terbaik untuk pendidikan vokasi masa depan Anda.
          </motion.p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[240px]">
          {/* Main Large Card */}
          <motion.div 
            initial={{ opacity: 0, scale: 0.95 }}
            whileInView={{ opacity: 1, scale: 1 }}
            viewport={{ once: true }}
            className="md:col-span-2 lg:col-span-2 row-span-2 bg-primary rounded-3xl p-8 flex flex-col justify-between text-white relative overflow-hidden group"
          >
            <div className="absolute top-0 right-0 p-8 opacity-10 transform translate-x-4 -translate-y-4 group-hover:scale-110 transition-transform duration-500">
              <Trophy size={160} />
            </div>
            
            <div>
              <div className="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-6 backdrop-blur-md">
                <Trophy size={28} className="text-accent" />
              </div>
              <h3 className="text-3xl font-bold mb-4 leading-tight">Sekolah Pusat Keunggulan <br/><span className="text-slate-400 font-medium text-xl">(Center of Excellence)</span></h3>
              <p className="text-slate-300 text-lg max-w-md leading-relaxed">
                Terpilih sebagai SMK Pusat Keunggulan oleh Kemdikbudristek, dengan kurikulum terstandarisasi industri global dan fasilitas pembelajaran berbasis Teaching Factory (TeFa).
              </p>
            </div>
            
            <a href="#" className="inline-flex items-center gap-2 text-accent font-bold mt-8 hover:text-white transition-colors group-hover:translate-x-2 duration-300">
              Pelajari lebih lanjut <ArrowUpRight size={20} />
            </a>
          </motion.div>

          {/* Stat Card 1 */}
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.1 }}
            className="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
          >
            <div className="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mb-4">
              <GraduationCap size={24} />
            </div>
            <div className="text-4xl font-black text-slate-900 mb-2">85%</div>
            <div className="text-slate-500 font-medium">Lulusan Langsung Kerja</div>
          </motion.div>

          {/* Stat Card 2 */}
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
            className="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
          >
            <div className="w-12 h-12 bg-amber-50 text-accent rounded-full flex items-center justify-center mb-4">
              <Building2 size={24} />
            </div>
            <div className="text-4xl font-black text-slate-900 mb-2">150+</div>
            <div className="text-slate-500 font-medium">Mitra Industri Nasional</div>
          </motion.div>

          {/* Image/Highlight Card */}
          <motion.div 
            initial={{ opacity: 0, scale: 0.95 }}
            whileInView={{ opacity: 1, scale: 1 }}
            viewport={{ once: true }}
            transition={{ delay: 0.3 }}
            className="md:col-span-2 lg:col-span-2 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2940&auto=format&fit=crop')] bg-cover bg-center rounded-3xl relative overflow-hidden group"
          >
            <div className="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
            <div className="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
              <h3 className="text-2xl font-bold text-white mb-2">Fasilitas Modern</h3>
              <p className="text-slate-200">Laboratorium & Bengkel Standar Industri 4.0</p>
            </div>
          </motion.div>

          {/* Stat Card 3 */}
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.4 }}
            className="md:col-span-2 lg:col-span-1 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-col justify-center items-center text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
          >
            <div className="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center mb-4">
              <Users size={24} />
            </div>
            <div className="text-4xl font-black text-slate-900 mb-2">2.5K</div>
            <div className="text-slate-500 font-medium">Siswa Aktif Berprestasi</div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
