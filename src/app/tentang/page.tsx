"use client";

import Link from "next/link";
import Image from "next/image";
import { sekolahInfo, sejarahTimeline } from "@/lib/mock-data";
import { Landmark, Eye, Target, MapPin, Phone, Mail } from "lucide-react";
import { motion } from "framer-motion";

export default function Tentang() {
  return (
    <div className="min-h-screen">
      {/* Hero */}
      <section className="relative min-h-[60vh] flex items-center justify-center pt-20">
        <Image src="/hero-bg.jpg" alt="Gedung SMKN 2 Yogyakarta" fill className="object-cover z-0" priority />
        <div className="absolute inset-0 bg-slate-900/80 z-10" />
        <div className="container mx-auto px-4 relative z-20 text-center">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-sm font-medium mb-6"
          >
            <Landmark size={16} /> Gedung Cagar Budaya Nasional — Didirikan {sekolahInfo.didirikan}
          </motion.div>
          <motion.h1 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.1 }}
            className="text-4xl md:text-6xl font-black text-white mb-6"
          >
            Profil <span className="text-transparent bg-clip-text bg-gradient-to-r from-accent to-amber-300">Sekolah</span>
          </motion.h1>
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.2 }}
            className="text-lg text-slate-300 max-w-3xl mx-auto"
          >
            Eks. Princess Juliana School (PJS) / STM 1 Yogyakarta — Sekolah teknik tertua dan paling bersejarah di Indonesia, membentuk tenaga profesional berkelas dunia selama lebih dari satu abad.
          </motion.p>
        </div>
      </section>

      {/* Identitas */}
      <section className="py-24 bg-white">
        <div className="container mx-auto px-4 max-w-5xl">
          <div className="grid grid-cols-2 md:grid-cols-3 gap-8">
            {[
              { label: "Nama Resmi", value: sekolahInfo.nama },
              { label: "Nama Sejarah", value: sekolahInfo.namaLama },
              { label: "Didirikan", value: sekolahInfo.didirikan },
              { label: "Akreditasi", value: sekolahInfo.akreditasi },
              { label: "Sertifikasi", value: sekolahInfo.sertifikasiISO },
              { label: "Luas Area", value: sekolahInfo.luasTanah }
            ].map((item, idx) => (
              <motion.div 
                key={idx}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: idx * 0.1 }}
                className="bg-slate-50 p-6 rounded-2xl border border-slate-100 text-center"
              >
                <h3 className="text-sm font-bold text-accent uppercase tracking-wider mb-2">{item.label}</h3>
                <p className="text-xl font-bold text-slate-900">{item.value}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Visi & Misi */}
      <section className="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div className="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div className="container mx-auto px-4 max-w-6xl relative z-10">
          <div className="text-center mb-16">
            <span className="text-accent font-bold tracking-wider uppercase text-sm mb-2 block">Visi & Misi</span>
            <h2 className="text-3xl md:text-4xl font-black">Fondasi <span className="text-accent">Pendidikan Kami</span></h2>
          </div>
          <div className="grid md:grid-cols-2 gap-12">
            <motion.div 
              initial={{ opacity: 0, x: -50 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="bg-slate-800/50 p-8 rounded-3xl border border-slate-700 backdrop-blur-sm"
            >
              <div className="w-16 h-16 bg-accent/20 text-accent rounded-2xl flex items-center justify-center mb-6">
                <Eye size={32} />
              </div>
              <h3 className="text-2xl font-bold mb-4">Visi</h3>
              <p className="text-lg text-slate-300 leading-relaxed">{sekolahInfo.visi}</p>
            </motion.div>
            
            <motion.div 
              initial={{ opacity: 0, x: 50 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="bg-slate-800/50 p-8 rounded-3xl border border-slate-700 backdrop-blur-sm"
            >
              <div className="w-16 h-16 bg-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center mb-6">
                <Target size={32} />
              </div>
              <h3 className="text-2xl font-bold mb-4">Misi</h3>
              <ul className="space-y-3 text-slate-300">
                {sekolahInfo.misi.map((m, i) => (
                  <li key={i} className="flex gap-3">
                    <span className="text-blue-400 font-bold">{i+1}.</span>
                    <span>{m}</span>
                  </li>
                ))}
              </ul>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Timeline Sejarah */}
      <section className="py-24 bg-slate-50">
        <div className="container mx-auto px-4 max-w-4xl">
          <div className="text-center mb-16">
            <span className="text-accent font-bold tracking-wider uppercase text-sm mb-2 block">Perjalanan Waktu</span>
            <h2 className="text-3xl md:text-4xl font-black text-slate-900 mb-4">Sejarah <span className="text-primary">Panjang Kami</span></h2>
            <p className="text-slate-600">Dari Princess Juliana School 1919 hingga menjadi SMK Negeri 2 Yogyakarta yang modern dan bertaraf internasional.</p>
          </div>
          
          <div className="relative border-l-2 border-slate-200 ml-3 md:ml-1/2">
            {sejarahTimeline.map((item, i) => (
              <motion.div 
                key={i} 
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: i * 0.1 }}
                className="mb-10 ml-8 relative"
              >
                <div className="absolute -left-10 top-1 w-4 h-4 bg-accent rounded-full border-4 border-slate-50"></div>
                <div className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                  <span className="text-2xl font-black text-slate-200 block mb-2">{item.tahun}</span>
                  <p className="text-slate-700 font-medium">{item.event}</p>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="py-24 bg-primary text-center px-4">
        <h2 className="text-3xl md:text-4xl font-black text-white mb-6">Lebih dari 105 Tahun Mencetak Profesional</h2>
        <p className="text-slate-300 mb-10 max-w-2xl mx-auto">Bergabunglah dengan sejarah panjang SMKN 2 Yogyakarta dan wujudkan cita-cita masa depanmu bersama kami.</p>
        <div className="flex flex-col sm:flex-row justify-center gap-4">
          <Link href="/ppdb" className="px-8 py-4 bg-accent text-slate-900 font-bold rounded-full hover:scale-105 transition-transform">
            Daftar Siswa Baru
          </Link>
          <Link href="/#jurusan" className="px-8 py-4 bg-white/10 text-white font-bold rounded-full hover:bg-white/20 transition-colors border border-white/20">
            Lihat Program Keahlian
          </Link>
        </div>
      </section>
    </div>
  );
}
