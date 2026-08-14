import type { Metadata } from "next";
import { Inter } from "next/font/google";
import Navbar from "@/components/layout/Navbar";
import Footer from "@/components/layout/Footer";
import "./globals.css";

const inter = Inter({
  variable: "--font-inter",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "SMK Negeri 2 Yogyakarta | The Industrial Culture School",
  description: "Website Resmi SMK Negeri 2 Yogyakarta. Menjadi lembaga pendidikan dan pelatihan kejuruan bertaraf internasional yang menghasilkan lulusan kompeten, berkarakter, dan berjiwa wirausaha.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="id" className={`${inter.variable}`}>
      <body>
        <Navbar />
        <main>{children}</main>
        <Footer />
      </body>
    </html>
  );
}
