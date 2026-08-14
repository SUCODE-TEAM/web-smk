import Hero from '@/components/sections/Hero';
import StatsBento from '@/components/sections/StatsBento';
import PartnerBanner from '@/components/sections/PartnerBanner';
import JurusanSection from '@/components/sections/JurusanSection';
import BeritaSection from '@/components/sections/BeritaSection';

export default function Home() {
  return (
    <main className="min-h-screen">
      <Hero />
      <StatsBento />
      <JurusanSection />
      <PartnerBanner />
      <BeritaSection />
    </main>
  );
}
