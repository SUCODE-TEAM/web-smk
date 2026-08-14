"use client";

import { motion } from 'framer-motion';

export default function PartnerBanner() {
  const partners = [
    "PT Astra Honda Motor",
    "PT Telkom Indonesia",
    "Panasonic",
    "Samsung Electronics",
    "PT United Tractors",
    "Epson Indonesia",
    "PLN Persero",
    "Mitsubishi Motors",
    "Indofood",
    "Kominfo"
  ];

  return (
    <section className="py-16 bg-white overflow-hidden border-t border-b border-slate-100">
      <div className="container mx-auto px-4 text-center mb-8">
        <h3 className="text-sm font-bold tracking-widest text-slate-400 uppercase">Dipercaya & Bermitra dengan Industri Terkemuka</h3>
      </div>
      
      <div className="relative flex overflow-x-hidden group">
        {/* We use two identical blocks that animate-marquee to create a seamless infinite scroll */}
        <div className="animate-marquee whitespace-nowrap flex items-center gap-16 py-4">
          {[...partners, ...partners, ...partners].map((partner, index) => (
            <div key={index} className="text-xl md:text-2xl font-black text-slate-200 hover:text-slate-400 transition-colors cursor-default">
              {partner}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
