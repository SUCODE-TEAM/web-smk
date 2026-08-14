"use client";

import Link from 'next/link';
import { ChevronRight } from 'lucide-react';
import { getLucideIcon } from '@/lib/utils';
import { jurusanData } from '@/lib/mock-data';
import { motion } from 'framer-motion';

const containerVariants = {
  hidden: { opacity: 0 },
  show: {
    opacity: 1,
    transition: {
      staggerChildren: 0.1
    }
  }
};

const itemVariants = {
  hidden: { opacity: 0, y: 20 },
  show: { opacity: 1, y: 0 }
};

export default function JurusanSection() {
  return (
    <section id="jurusan" className="py-24 bg-white">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div className="text-center max-w-2xl mx-auto mb-16">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-accent font-bold tracking-wider uppercase text-sm mb-2"
          >
            Program Keahlian
          </motion.div>
          <motion.h2 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.1 }}
            className="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tight"
          >
            9 Jurusan <span className="text-primary">Terakreditasi A</span>
          </motion.h2>
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
            className="text-slate-600 text-lg"
          >
            Kurikulum berbasis Teaching Factory (TEFA), fasilitas standar industri, dan kemitraan langsung dengan DUDI nasional & internasional.
          </motion.p>
        </div>

        <motion.div 
          variants={containerVariants}
          initial="hidden"
          whileInView="show"
          viewport={{ once: true }}
          className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
        >
          {jurusanData.map((j) => (
            <motion.div key={j.id} variants={itemVariants}>
              <Link href={`/jurusan/${j.id}`} className="block h-full bg-slate-50 border border-slate-100 rounded-3xl p-8 hover:bg-white hover:shadow-xl hover:-translate-y-1 hover:border-blue-100 transition-all duration-300 group">
                <div className="flex justify-between items-start mb-6">
                  <div className="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center group-hover:bg-accent group-hover:scale-110 transition-all duration-300 shadow-md">
                    {getLucideIcon(j.icon, "w-7 h-7")}
                  </div>
                  <span className="px-3 py-1 bg-slate-200 text-slate-600 text-xs font-bold rounded-full">
                    {j.durasi}
                  </span>
                </div>
                <h3 className="text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-primary transition-colors">{j.title}</h3>
                <p className="text-slate-500 text-sm mb-6 line-clamp-3">
                  {j.description}
                </p>
                <div className="flex items-center gap-1 text-sm font-bold text-slate-400 group-hover:text-accent transition-colors">
                  Lihat Detail <ChevronRight size={16} className="group-hover:translate-x-1 transition-transform" />
                </div>
              </Link>
            </motion.div>
          ))}
        </motion.div>
      </div>
    </section>
  );
}
