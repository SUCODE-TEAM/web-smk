"use client";

import Link from "next/link";
import { sekolahInfo, jurusanData } from "@/lib/mock-data";
import { Megaphone, ClipboardList, Stethoscope, FileText, ExternalLink, Sparkles } from "lucide-react";
import { motion } from "framer-motion";

export default function PPDB() {
  return (
    <div className="min-h-screen bg-slate-50">
      {/* Hero */}
      <section className="pt-32 pb-20 bg-slate-900 text-center px-4 relative overflow-hidden">
        <div className="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div className="container mx-auto max-w-4xl relative z-10">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/20 text-accent font-bold text-sm mb-6"
          >
            <Megaphone size={16} /> Informasi Pendaftaran Siswa Baru
          </motion.div>
          
          <motion.h1 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.1 }}
            className="text-4xl md:text-6xl font-black text-white mb-6 leading-tight"
          >
            Penerimaan Peserta<br />
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-accent">Didik Baru 2026</span>
          </motion.h1>
          
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.2 }}
            className="text-lg text-slate-300 max-w-2xl mx-auto mb-10"
          >
            Bergabunglah dengan The Industrial Culture School. Pendaftaran mengacu pada Petunjuk Teknis PPDB dari Dinas Pendidikan Pemuda dan Olahraga DIY.
          </motion.p>
          
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.3 }}
            className="flex flex-col sm:flex-row justify-center gap-4"
          >
            <Link href="https://ppdb.jogjaprov.go.id/" target="_blank" rel="noopener noreferrer" className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-accent text-slate-900 font-bold rounded-full hover:scale-105 transition-transform shadow-lg shadow-accent/20">
              Buka Portal PPDB DIY <ExternalLink size={18} />
            </Link>
            <Link href="#alur" className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-bold rounded-full hover:bg-white/20 transition-colors">
              Lihat Alur Pendaftaran
            </Link>
          </motion.div>
        </div>
      </section>

      {/* Alur Pendaftaran */}
      <section id="alur" className="py-24 container mx-auto px-4 max-w-7xl">
        <div className="text-center mb-16">
          <span className="text-accent font-bold tracking-wider uppercase text-sm mb-2 block">Langkah Demi Langkah</span>
          <h2 className="text-3xl md:text-4xl font-black text-slate-900 mb-4">Alur <span className="text-primary">Pendaftaran</span></h2>
          <p className="text-slate-600 max-w-2xl mx-auto">Ikuti langkah berikut untuk mendaftar menjadi siswa SMKN 2 Yogyakarta melalui sistem PPDB DIY.</p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
          {[
            { num: "01", title: "Pengajuan Akun", desc: "Daftarkan diri di situs resmi PPDB DIY untuk mendapatkan token." },
            { num: "02", title: "Aktivasi PIN", desc: "Aktivasi akun menggunakan nomor peserta dan token." },
            { num: "03", title: "Pilih Sekolah", desc: "Pilih SMKN 2 Yogyakarta dan tentukan program keahlian." },
            { num: "04", title: "Seleksi", desc: "Tunggu hasil seleksi sesuai jalur melalui portal PPDB." },
            { num: "05", title: "Daftar Ulang", desc: "Lakukan daftar ulang secara langsung di sekolah jika diterima." }
          ].map((step, idx) => (
            <motion.div 
              key={idx}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: idx * 0.1 }}
              className="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow relative overflow-hidden group"
            >
              <div className="absolute top-0 right-0 p-4 text-7xl font-black text-slate-50 group-hover:text-slate-100 transition-colors -z-0">
                {step.num}
              </div>
              <div className="relative z-10">
                <div className="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold text-lg mb-4">
                  {step.num}
                </div>
                <h3 className="text-lg font-bold text-slate-900 mb-2">{step.title}</h3>
                <p className="text-sm text-slate-600">{step.desc}</p>
              </div>
            </motion.div>
          ))}
        </div>
      </section>

      {/* Persyaratan */}
      <section className="py-24 bg-white border-y border-slate-100">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="text-center mb-16">
            <span className="text-accent font-bold tracking-wider uppercase text-sm mb-2 block">Persyaratan</span>
            <h2 className="text-3xl md:text-4xl font-black text-slate-900">Syarat <span className="text-primary">Pendaftaran</span></h2>
          </div>
          
          <div className="grid md:grid-cols-3 gap-8">
            {[
              { icon: <ClipboardList size={32} />, title: "Syarat Umum", color: "bg-blue-50 text-blue-600", items: ["Lulus SMP/MTs/sederajat", "Berusia maks 21 tahun pada 1 Juli", "Memiliki Ijazah / SKL", "Terdaftar di Dapodik"] },
              { icon: <Stethoscope size={32} />, title: "Syarat Kesehatan", color: "bg-emerald-50 text-emerald-600", items: ["Berbadan sehat (surat dokter)", "Tidak buta warna parsial/total", "Memenuhi standar tinggi badan minimal", "Lolos asesmen minat bakat"] },
              { icon: <FileText size={32} />, title: "Berkas Utama", color: "bg-amber-50 text-amber-600", items: ["Fotocopy Ijazah & SKHUN", "Fotocopy KK & Akta Kelahiran", "Pas foto 3×4 (4 lembar)", "Surat keterangan sehat asli"] }
            ].map((req, idx) => (
              <motion.div 
                key={idx}
                initial={{ opacity: 0, scale: 0.95 }}
                whileInView={{ opacity: 1, scale: 1 }}
                viewport={{ once: true }}
                transition={{ delay: idx * 0.1 }}
                className="bg-slate-50 p-8 rounded-3xl border border-slate-100"
              >
                <div className={`w-16 h-16 rounded-2xl flex items-center justify-center mb-6 ${req.color}`}>
                  {req.icon}
                </div>
                <h3 className="text-xl font-bold text-slate-900 mb-4">{req.title}</h3>
                <ul className="space-y-3">
                  {req.items.map((item, i) => (
                    <li key={i} className="flex gap-2 text-slate-600 text-sm">
                      <div className="w-1.5 h-1.5 bg-accent rounded-full mt-1.5 shrink-0" />
                      <span>{item}</span>
                    </li>
                  ))}
                </ul>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Fitur Kuis Minat (Mockup for Killer Feature) */}
      <section className="py-24 container mx-auto px-4 max-w-4xl text-center">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="bg-gradient-to-br from-primary to-blue-900 rounded-3xl p-10 md:p-16 text-white shadow-xl relative overflow-hidden"
        >
          <div className="absolute top-0 right-0 w-64 h-64 bg-accent rounded-full filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>
          
          <div className="relative z-10">
            <div className="w-16 h-16 bg-white/10 backdrop-blur rounded-full flex items-center justify-center mx-auto mb-6 text-accent">
              <Sparkles size={32} />
            </div>
            <h2 className="text-3xl font-black mb-4">Bingung Pilih Jurusan?</h2>
            <p className="text-slate-300 mb-8 max-w-xl mx-auto text-lg">Ikuti simulasi kuis minat dan bakat kami untuk menemukan program keahlian yang paling cocok dengan passion kamu!</p>
            <button className="px-8 py-4 bg-white text-primary font-bold rounded-full hover:scale-105 transition-transform shadow-lg">
              Mulai Kuis Penjurusan
            </button>
          </div>
        </motion.div>
      </section>
    </div>
  );
}
