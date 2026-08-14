"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';
import { Menu, X } from 'lucide-react';
import { motion, AnimatePresence } from 'framer-motion';

export default function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navLinks = [
    { name: 'Beranda', path: '/' },
    { name: 'Profil', path: '/tentang' },
    { name: 'Jurusan', path: '/jurusan/tkj' },
    { name: 'Kesiswaan', path: '#' },
    { name: 'Berita', path: '#' },
  ];

  return (
    <header 
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled ? 'bg-white/90 backdrop-blur-md shadow-sm py-3' : 'bg-transparent py-5'
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <Link href="/" className="flex items-center gap-2 group">
            <span className={`text-2xl font-black tracking-tighter ${isScrolled ? 'text-slate-900' : 'text-white'}`}>
              SMKN 2 <span className="text-accent">YOGYAKARTA</span>
            </span>
          </Link>

          {/* Desktop Nav */}
          <nav className="hidden md:flex items-center gap-8">
            {navLinks.map((link) => (
              <Link 
                key={link.name} 
                href={link.path} 
                className={`text-sm font-semibold transition-colors hover:text-accent ${
                  isScrolled ? 'text-slate-600' : 'text-white/90'
                }`}
              >
                {link.name}
              </Link>
            ))}
            <Link 
              href="/ppdb" 
              className={`px-6 py-2.5 rounded-full text-sm font-bold transition-all hover:scale-105 ${
                isScrolled 
                  ? 'bg-slate-900 text-white hover:shadow-lg hover:shadow-slate-900/20' 
                  : 'bg-white text-slate-900 hover:bg-white/90'
              }`}
            >
              Info PPDB
            </Link>
          </nav>

          {/* Mobile Toggle */}
          <button 
            className={`md:hidden p-2 rounded-md ${isScrolled ? 'text-slate-900' : 'text-white'}`}
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            aria-label="Toggle menu"
          >
            {isMobileMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isMobileMenuOpen && (
          <motion.div 
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={{ opacity: 0, height: 0 }}
            className="absolute top-full left-0 right-0 bg-white shadow-xl md:hidden overflow-hidden"
          >
            <div className="flex flex-col p-6 space-y-4">
              {navLinks.map((link) => (
                <Link 
                  key={link.name} 
                  href={link.path} 
                  className="text-slate-800 font-semibold p-2 hover:bg-slate-50 rounded-lg transition-colors"
                  onClick={() => setIsMobileMenuOpen(false)}
                >
                  {link.name}
                </Link>
              ))}
              <Link 
                href="/ppdb" 
                className="bg-slate-900 text-white text-center font-bold p-3 rounded-lg mt-4"
                onClick={() => setIsMobileMenuOpen(false)}
              >
                Info PPDB
              </Link>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  );
}
