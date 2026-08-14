"use client";

import Image from 'next/image';
import Link from 'next/link';
import { ArrowRight } from 'lucide-react';
import { beritaData } from '@/lib/mock-data';
import { motion } from 'framer-motion';

export default function BeritaSection() {
  return (
    <section id="berita" className="py-24 bg-slate-50">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
          <div className="max-w-2xl">
            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              className="text-accent font-bold tracking-wider uppercase text-sm mb-2"
            >
              Berita & Prestasi
            </motion.div>
            <motion.h2 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.1 }}
              className="text-3xl md:text-4xl font-black text-slate-900 tracking-tight"
            >
              Kabar Terbaru <span className="text-primary">SMKN 2 YK</span>
            </motion.h2>
          </div>
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
          >
            <Link href="/berita" className="inline-flex items-center gap-2 font-bold text-primary hover:text-accent transition-colors group">
              Lihat Semua Berita <ArrowRight size={20} className="group-hover:translate-x-1 transition-transform" />
            </Link>
          </motion.div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {beritaData.slice(0, 3).map((b, i) => (
            <motion.article 
              key={b.id}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.1 * (i + 1) }}
              className="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 group flex flex-col"
            >
              <div className="relative h-64 overflow-hidden">
                <Image 
                  src={b.image.startsWith('/') ? b.image : 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=2070&auto=format&fit=crop'} 
                  alt={b.title} 
                  fill 
                  className="object-cover group-hover:scale-105 transition-transform duration-500" 
                />
                <div className="absolute top-4 left-4 bg-white/90 backdrop-blur text-slate-900 text-xs font-bold px-3 py-1.5 rounded-full">
                  {b.date}
                </div>
              </div>
              <div className="p-8 flex flex-col flex-grow">
                <h3 className="text-xl font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-primary transition-colors">{b.title}</h3>
                <p className="text-slate-500 mb-6 line-clamp-3 flex-grow">{b.excerpt}</p>
                <Link href={`/berita/${b.id}`} className="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-accent transition-colors">
                  Baca Selengkapnya <ArrowRight size={16} />
                </Link>
              </div>
            </motion.article>
          ))}
        </div>
      </div>
    </section>
  );
}
