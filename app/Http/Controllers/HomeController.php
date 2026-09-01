<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda dengan data profil SMK Negeri 2 Yogyakarta.
     */
    public function index()
    {
        $dataPath = base_path('scraping/data/smk2_lengkap.json');
        $scrapedData = [];

        if (File::exists($dataPath)) {
            $scrapedData = json_decode(File::get($dataPath), true);
        }

        $schoolProfile = [
            'name' => 'SMK Negeri 2 Yogyakarta',
            'short_name' => 'SMKN 2 Yogyakarta',
            'motto' => 'Sekolah Menengah Kejuruan Tertua di Indonesia (Sejak 1919 - Eks PJS / STM 1 Yogyakarta)',
            'address' => 'Jl. A.M. Sangaji No. 47, Jetis, Kota Yogyakarta, D.I. Yogyakarta 55233',
            'headmaster' => 'Drs. Moh Rokhis',
            'headmaster_nip' => '196909091994031011',
            'visi' => 'Menjadi lembaga pendidikan dan pelatihan kejuruan bertaraf internasional dan berwawasan lingkungan yang menghasilkan tamatan professional, mampu berwirausaha, beriman dan bertaqwa.',
            'misi' => [
                'Melaksanakan sistem manajemen mutu (SMM) berbasis ICT dan berkelanjutan.',
                'Meningkatkan kualitas tenaga pendidik dan kependidikan yang memenuhi kualifikasi dan kompetensi standar.',
                'Meningkatkan fasilitas dan lingkungan belajar yang nyaman memenuhi standar kualitas dan kuantitas.',
                'Mengembangkan kurikulum, metodologi pembelajaran dan sistem penilaian berbasis kompetensi.',
                'Menyelenggarakan pembelajaran sistem CBT dan PBE dengan pendekatan ICT.',
                'Membangun kemitraan strategis dengan industri nasional maupun internasional.',
                'Membina karakter peserta didik melalui kecakapan hidup (life skills) dan akhlak mulia.',
            ],
            'sejarah_singkat' => 'SMK Negeri 2 Yogyakarta dibangun pada tahun 1919 pada masa kolonial Belanda dengan nama Princess Juliana School (PJS). Dikenal dengan nama STM Jetis (STM 1 Yogyakarta), sekolah ini merupakan pelopor pendidikan teknik di Indonesia dan kini berstatus sebagai Cagar Budaya serta SMK Pusat Keunggulan.',
        ];

        $majors = [
            [
                'code' => 'sija',
                'icon' => 'terminal',
                'title' => 'Sistem Informatika Jaringan dan Aplikasi (SIJA)',
                'description' => 'Program 4 tahun keahlian cloud computing, cybersecurity, server administration, dan software development.',
            ],
            [
                'code' => 'tkr',
                'icon' => 'directions_car',
                'title' => 'Teknik Kendaraan Ringan Otomotif',
                'description' => 'Kompetensi diagnosis mesin injeksi modern, electrical system kendaraan, dan teknologi mobil listrik.',
            ],
            [
                'code' => 'tp',
                'icon' => 'precision_manufacturing',
                'title' => 'Teknik Pemesinan',
                'description' => 'Pengoperasian mesin bubut, milling konvensional hingga pemrograman mesin CNC presisi tinggi.',
            ],
            [
                'code' => 'titl',
                'icon' => 'bolt',
                'title' => 'Teknik Instalasi Tenaga Listrik',
                'description' => 'Instalasi penerangan & tenaga industri, otomatisasi PLC, motor listrik, dan energi baru terbarukan.',
            ],
            [
                'code' => 'dpib',
                'icon' => 'architecture',
                'title' => 'Desain Pemodelan & Info Bangunan (DPIB)',
                'description' => 'Perancangan arsitektur 2D/3D CAD, Building Information Modeling (BIM), dan perhitungan estimasi biaya.',
            ],
            [
                'code' => 'dkv',
                'icon' => 'draw',
                'title' => 'Multimedia / Desain Komunikasi Visual',
                'description' => 'Pengembangan konten kreatif digital, animasi 2D/3D, UI/UX design, videografi, dan periklanan.',
            ],
            [
                'code' => 'tav',
                'icon' => 'speaker',
                'title' => 'Teknik Audio dan Video',
                'description' => 'Perekayasaan sistem audio visual profesional, sistem akustik, elektronika digital, dan mikroprosesor.',
            ],
            [
                'code' => 'geomatika',
                'icon' => 'explore',
                'title' => 'Teknik Geomatika',
                'description' => 'Pengukuran tanah, pemetaan topografi, sistem informasi geografis (SIG), dan fotogrametri drone.',
            ],
            [
                'code' => 'kgsp',
                'icon' => 'handyman',
                'title' => 'Konstruksi Gedung, Sanitasi & Perawatan',
                'description' => 'Pengerjaan struktur beton bertulang, sistem sanitasi plambing modern, dan perawatan utilitas gedung.',
            ],
        ];

        $stats = [
            ['icon' => 'history_edu', 'value' => '1919', 'label' => 'Tahun Berdiri (PJS)'],
            ['icon' => 'domain', 'value' => '9', 'label' => 'Program Keahlian'],
            ['icon' => 'school', 'value' => '2,000+', 'label' => 'Siswa Aktif'],
            ['icon' => 'verified', 'value' => '100+ Thn', 'label' => 'Tradisi Keunggulan'],
        ];

        $news = [
            [
                'date' => '15 Oktober 2024',
                'title' => 'Juara 1 Lomba Kompetensi Siswa (LKS) Tingkat Nasional',
                'summary' => 'Siswa-siswi SMK Negeri 2 Yogyakarta kembali meraih medali emas pada ajang LKS Nasional bidang Cyber Security dan CNC Milling.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuASF6hE9RQm2SQLA6Z87Wyh6WT7-h1zqBgKVv7BKBJijVaydJ6A5Oej018esNgMObkVX6ddGdwo_DCvhn4SaKw7zABEM-LV2eS0RTYFI-2Dbmw8RXGFucA39bAMSMYguyhNJr-xWBfZthJk07VlramvTM_Z2uFypM4UjTtggax3crc1DioGcxFtVjGC8pMkfHhZdVNSpuh_Eh8RxCT3P1qu5ahnQVrHu0_W_6p-8_kl3W5dq3vi2WCSVQ',
                'alt' => 'Prestasi Siswa SMKN 2 Yogyakarta',
            ],
            [
                'date' => '10 Oktober 2024',
                'title' => 'Kemitraan Industri Kelas Khusus bersama Industri Manufaktur & IT Terkemuka',
                'summary' => 'Penguatan kurikulum vokasi berbasis link and match serta sertifikasi internasional Mikrotik Academy dan sertifikasi BNSP.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDRnpWnw2uH3I3CD6IijxlTxQJy6lPpvWAYhs1Cy0GLYn5zbC_eM7lC_8L-FdyEKsHJNzCfCfBEkPdRuk1zahluMCSpzSYlULzzym19hIvzwxE6uSZ-MhvURR0VfnuU4vWQxlOuL9BXKuDAeheoNg0bvv3KIh22TgoGSwbfiTogVPaO-_IF4qQav3b4hqGpChvjuzY_vIUSSsZcez0GcRQ9yPEGF178X8jGj80q4ZPXTPcaW27j0lLHWQ',
                'alt' => 'Kunjungan Industri SMKN 2 Yogyakarta',
            ],
            [
                'date' => '05 Oktober 2024',
                'title' => 'Expo Produk Karya Siswa & Gelar Teknologi Tepat Guna',
                'summary' => 'Pameran karya inovasi teknik mesin, prototipe kendaraan listrik, aplikasi software, dan maket arsitektur cagar budaya.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDRX0rGlk-G8ySx8AFWk59nYEYYS5zzkwL9kwskV99MZEhLTbsHJMMYHmJtl9YtN5bM63l-LXXvApg5zvZbJnuUfIEKja99kFqRFGmLwr7yDdj40jBALN5isghKrRUv04Rw9oHZ9OJSGbOsMJm2tPfiTrQPnIb-a4Qch2GY7We9b6RbfHIsijfOnlDna5CIczHciTsWOs8OVaoAGqz81uO57dpUPj9Ph_AAc83wiTfFmdZ46C9MkTMTTg',
                'alt' => 'Pameran Karya Siswa SMKN 2 Yogyakarta',
            ],
        ];

        $partners = [
            [
                'name' => 'PT Kereta Api Indonesia (Persero)',
                'category' => 'BUMN Transportasi & Perkeretaapian',
                'icon' => 'train',
                'color' => 'bg-orange-50 text-orange-600 border-orange-200',
            ],
            [
                'name' => 'PT Astra Honda Motor',
                'category' => 'Manufaktur Otomotif',
                'icon' => 'two_wheeler',
                'color' => 'bg-red-50 text-red-600 border-red-200',
            ],
            [
                'name' => 'PT Telkom Indonesia (Persero) Tbk',
                'category' => 'Telekomunikasi & Jaringan',
                'icon' => 'cell_tower',
                'color' => 'bg-rose-50 text-rose-600 border-rose-200',
            ],
            [
                'name' => 'PT Toyota Motor Manufacturing',
                'category' => 'Otomotif & Manufaktur Global',
                'icon' => 'directions_car',
                'color' => 'bg-red-50 text-red-700 border-red-200',
            ],
            [
                'name' => 'PT Schneider Electric Indonesia',
                'category' => 'Otomasi & Manajemen Energi',
                'icon' => 'electrical_services',
                'color' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
            ],
            [
                'name' => 'PT Komatsu Indonesia',
                'category' => 'Alat Berat & Rekayasa Mesin',
                'icon' => 'precision_manufacturing',
                'color' => 'bg-blue-50 text-blue-600 border-blue-200',
            ],
            [
                'name' => 'PT PLN (Persero)',
                'category' => 'Kelistrikan & Transmisi Nasional',
                'icon' => 'electric_bolt',
                'color' => 'bg-sky-50 text-sky-600 border-sky-200',
            ],
            [
                'name' => 'PT Mayora Indah Tbk',
                'category' => 'Industri FMCG & Otomasi',
                'icon' => 'factory',
                'color' => 'bg-amber-50 text-amber-700 border-amber-200',
            ],
            [
                'name' => 'MikroTik Academy',
                'category' => 'Sertifikasi Jaringan Global',
                'icon' => 'router',
                'color' => 'bg-slate-100 text-slate-700 border-slate-300',
            ],
            [
                'name' => 'PT United Tractors Tbk',
                'category' => 'Distribusi Alat Berat & Mesin',
                'icon' => 'construction',
                'color' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
            ],
            [
                'name' => 'PT Panasonic Gobel Indonesia',
                'category' => 'Elektronika & Audio Visual',
                'icon' => 'tv',
                'color' => 'bg-indigo-50 text-indigo-600 border-indigo-200',
            ],
            [
                'name' => 'PT Gameloft Indonesia',
                'category' => 'Game & Multimedia Digital',
                'icon' => 'sports_esports',
                'color' => 'bg-purple-50 text-purple-600 border-purple-200',
            ],
        ];

        return view('home', compact('schoolProfile', 'majors', 'stats', 'news', 'partners', 'scrapedData'));
    }
}
