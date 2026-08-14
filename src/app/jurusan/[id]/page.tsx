import { jurusanData, sekolahInfo } from "@/lib/mock-data";
import Link from "next/link";
import { notFound } from "next/navigation";
import { getLucideIcon } from "@/lib/utils";
import { Target, Briefcase, Award, Handshake, MapPin, Phone, Mail, CheckCircle2, ChevronLeft, ChevronRight } from "lucide-react";

export function generateStaticParams() {
  return jurusanData.map((j) => ({
    id: j.id.toString(),
  }));
}

export async function generateMetadata({ params }: { params: Promise<{ id: string }> }) {
  const resolvedParams = await params;
  const jurusan = jurusanData.find((j) => j.id === parseInt(resolvedParams.id, 10));
  if (!jurusan) return { title: "Jurusan Tidak Ditemukan" };
  return {
    title: `${jurusan.title} | ${sekolahInfo.nama}`,
    description: jurusan.description,
  };
}

export default async function JurusanDetail({ params }: { params: Promise<{ id: string }> }) {
  const resolvedParams = await params;
  const jurusanId = parseInt(resolvedParams.id, 10);
  const jurusan = jurusanData.find((j) => j.id === jurusanId);

  if (!jurusan) notFound();

  return (
    <div className="min-h-screen bg-slate-50 pb-24">
      {/* Hero Banner */}
      <section className="bg-slate-900 pt-32 pb-20 relative overflow-hidden text-center px-4">
        <div className="absolute inset-0 bg-gradient-to-tr from-primary via-slate-900 to-blue-900/50"></div>
        <div className="container mx-auto max-w-4xl relative z-10">
          <Link href="/#jurusan" className="inline-flex items-center gap-2 text-slate-300 hover:text-white transition-colors mb-8 text-sm font-bold">
            <ChevronLeft size={16} /> Kembali ke Daftar Program
          </Link>
          <div className="flex flex-col items-center">
            <div className="w-20 h-20 bg-white/10 backdrop-blur rounded-3xl flex items-center justify-center text-accent mb-6 shadow-xl border border-white/10">
              {getLucideIcon(jurusan.icon, "w-10 h-10")}
            </div>
            <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/20 border border-accent/20 text-accent text-xs font-bold mb-6">
              {jurusan.durasi} • Akreditasi {jurusan.akreditasi}
            </div>
            <h1 className="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">{jurusan.title}</h1>
            <p className="text-lg text-slate-300 max-w-2xl leading-relaxed">{jurusan.description}</p>
          </div>
        </div>
      </section>

      {/* Content Grid */}
      <section className="container mx-auto px-4 max-w-7xl -mt-8 relative z-20">
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
          {/* Main Column */}
          <div className="lg:col-span-2 space-y-8">
            {/* Kompetensi */}
            <div className="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
              <h2 className="text-2xl font-black text-slate-900 mb-6 flex items-center gap-3">
                <div className="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center"><Target size={20} /></div>
                Kompetensi yang Dipelajari
              </h2>
              <ul className="grid sm:grid-cols-2 gap-4">
                {jurusan.kompetensi.map((k, i) => (
                  <li key={i} className="flex items-start gap-3">
                    <CheckCircle2 className="text-emerald-500 shrink-0 mt-0.5" size={20} />
                    <span className="text-slate-600">{k}</span>
                  </li>
                ))}
              </ul>
            </div>

            {/* Peluang Karir */}
            <div className="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
              <h2 className="text-2xl font-black text-slate-900 mb-6 flex items-center gap-3">
                <div className="w-10 h-10 rounded-xl bg-amber-50 text-accent flex items-center justify-center"><Briefcase size={20} /></div>
                Peluang Karir
              </h2>
              <div className="flex flex-wrap gap-3">
                {jurusan.peluangKarir.map((k, i) => (
                  <div key={i} className="px-4 py-2 rounded-full bg-slate-50 border border-slate-200 text-slate-700 text-sm font-semibold hover:border-accent hover:text-accent transition-colors">
                    {k}
                  </div>
                ))}
              </div>
            </div>

            {/* Prestasi */}
            {jurusan.prestasi.length > 0 && (
              <div className="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
                <h2 className="text-2xl font-black text-slate-900 mb-6 flex items-center gap-3">
                  <div className="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center"><Award size={20} /></div>
                  Prestasi Unggulan
                </h2>
                <ul className="space-y-4">
                  {jurusan.prestasi.map((p, i) => (
                    <li key={i} className="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                      <Award className="text-accent shrink-0" size={24} />
                      <span className="text-slate-700 font-medium">{p}</span>
                    </li>
                  ))}
                </ul>
              </div>
            )}
          </div>

          {/* Sidebar */}
          <aside className="space-y-8">
            {/* Mitra Industri */}
            <div className="bg-primary text-white rounded-3xl p-8 shadow-xl">
              <h3 className="text-xl font-bold mb-6 flex items-center gap-3">
                <div className="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center"><Handshake size={20} /></div>
                Mitra Industri
              </h3>
              <ul className="space-y-3">
                {jurusan.mitraIndustri.map((m, i) => (
                  <li key={i} className="flex items-center gap-3 text-slate-300">
                    <div className="w-1.5 h-1.5 rounded-full bg-accent"></div>
                    {m}
                  </li>
                ))}
              </ul>
            </div>

            {/* CTA */}
            <div className="bg-gradient-to-br from-blue-600 to-blue-800 rounded-3xl p-8 text-white shadow-lg text-center">
              <h3 className="text-2xl font-black mb-4">Tertarik Jurusan Ini?</h3>
              <p className="text-blue-100 mb-8 text-sm">Pendaftaran mengacu pada portal resmi PPDB DIY. Kuota terbatas!</p>
              <div className="flex flex-col gap-3">
                <Link href="/ppdb" className="w-full py-4 rounded-xl bg-white text-blue-700 font-bold hover:bg-slate-50 transition-colors flex items-center justify-center gap-2">
                  Daftar Sekarang <ChevronRight size={18} />
                </Link>
                <Link href="https://ppdb.jogjaprov.go.id/" target="_blank" rel="noopener noreferrer" className="w-full py-4 rounded-xl bg-transparent border border-white/30 text-white font-bold hover:bg-white/10 transition-colors">
                  Portal PPDB DIY ↗
                </Link>
              </div>
            </div>

          </aside>
        </div>
      </section>

      {/* Other Programs */}
      <section className="container mx-auto px-4 max-w-7xl mt-24">
        <div className="flex items-center justify-between mb-8">
          <h2 className="text-2xl font-black text-slate-900">Program Keahlian Lainnya</h2>
          <Link href="/#jurusan" className="text-primary font-bold hover:text-accent transition-colors flex items-center gap-1">
            Lihat Semua <ChevronRight size={16} />
          </Link>
        </div>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          {jurusanData
            .filter((j) => j.id !== jurusanId)
            .slice(0, 4)
            .map((j) => (
              <Link href={`/jurusan/${j.id}`} key={j.id} className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md hover:border-blue-100 transition-all flex flex-col items-center text-center group">
                <div className="w-12 h-12 bg-slate-50 text-slate-400 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
                  {getLucideIcon(j.icon, "w-6 h-6")}
                </div>
                <span className="font-bold text-slate-700 group-hover:text-primary transition-colors">{j.shortName}</span>
              </Link>
            ))}
        </div>
      </section>
    </div>
  );
}
