import Link from 'next/link';
import { MapPin, Phone, Mail, ChevronRight } from 'lucide-react';

export default function Footer() {
  return (
    <footer className="bg-slate-950 text-slate-300 py-16 border-t border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          {/* Brand Col */}
          <div className="space-y-6">
            <div className="text-2xl font-black tracking-tighter text-white">
              SMKN 2 <span className="text-accent">YOGYAKARTA</span>
            </div>
            <p className="text-sm leading-relaxed text-slate-400">
              Sekolah menengah kejuruan bertaraf internasional yang menghasilkan lulusan kompeten, berkarakter, dan berjiwa wirausaha di era industri 4.0.
            </p>
            <div className="flex gap-4">
              <a href="#" className="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center hover:bg-accent hover:text-white transition-colors" aria-label="Facebook">FB</a>
              <a href="#" className="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center hover:bg-accent hover:text-white transition-colors" aria-label="Twitter">TW</a>
              <a href="#" className="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center hover:bg-accent hover:text-white transition-colors" aria-label="Instagram">IG</a>
              <a href="#" className="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center hover:bg-accent hover:text-white transition-colors" aria-label="Youtube">YT</a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-white font-bold mb-6 text-lg">Tautan Cepat</h4>
            <ul className="space-y-3">
              {[
                { name: 'Tentang Sekolah', path: '/tentang' },
                { name: 'Program Keahlian', path: '/jurusan/tkj' },
                { name: 'Informasi PPDB', path: '/ppdb' },
                { name: 'Bursa Kerja Khusus (BKK)', path: '#' },
                { name: 'Prestasi Siswa', path: '#' },
              ].map((link) => (
                <li key={link.name}>
                  <Link href={link.path} className="text-sm hover:text-accent transition-colors flex items-center gap-2 group">
                    <ChevronRight size={14} className="text-slate-700 group-hover:text-accent" /> {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Portal */}
          <div>
            <h4 className="text-white font-bold mb-6 text-lg">Portal Internal</h4>
            <ul className="space-y-3">
              {[
                { name: 'E-Learning', path: '#' },
                { name: 'E-Rapor', path: '#' },
                { name: 'Perpustakaan Digital', path: '#' },
                { name: 'Sistem Informasi Manajemen', path: '#' },
                { name: 'Alumni Portal', path: '#' },
              ].map((link) => (
                <li key={link.name}>
                  <Link href={link.path} className="text-sm hover:text-accent transition-colors flex items-center gap-2 group">
                    <ChevronRight size={14} className="text-slate-700 group-hover:text-accent" /> {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h4 className="text-white font-bold mb-6 text-lg">Hubungi Kami</h4>
            <ul className="space-y-4">
              <li className="flex items-start gap-3 text-sm">
                <MapPin size={20} className="text-accent shrink-0 mt-0.5" />
                <span>Jl. A.M. Sangaji No. 47, Cokrodiningratan, Jetis, Yogyakarta 55233</span>
              </li>
              <li className="flex items-center gap-3 text-sm">
                <Phone size={20} className="text-accent shrink-0" />
                <span>(0274) 513454</span>
              </li>
              <li className="flex items-center gap-3 text-sm">
                <Mail size={20} className="text-accent shrink-0" />
                <span>info@smkn2jogja.sch.id</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="mt-16 pt-8 border-t border-slate-900 flex flex-col md:flex-row items-center justify-between gap-4">
          <p className="text-sm text-slate-500">
            &copy; {new Date().getFullYear()} SMK Negeri 2 Yogyakarta. All rights reserved.
          </p>
          <div className="flex items-center gap-6 text-sm text-slate-500">
            <Link href="#" className="hover:text-white transition-colors">Kebijakan Privasi</Link>
            <Link href="#" className="hover:text-white transition-colors">Syarat & Ketentuan</Link>
          </div>
        </div>
      </div>
    </footer>
  );
}
