# Python Scraper - SMK Negeri 2 Yogyakarta

Script scraper untuk mengambil data otomatis dari website resmi [SMK Negeri 2 Yogyakarta](https://www.smk2-yk.sch.id/).

---

## 📦 Kebutuhan (Prerequisites)

- Python 3.8+
- Library `requests`, `beautifulsoup4`, `lxml`

Install dependensi:
```bash
pip install -r requirements.txt
```

---

## 🚀 Cara Menjalankan Scraper

Jalankan script `scraper.py`:
```bash
python scraper.py
```

---

## 📂 Data yang Di-scrape

Data akan otomatis tersimpan dalam format **JSON** di folder `scraping/data/`:

| File | Deskripsi |
|------|-----------|
| `smk2_lengkap.json` | Seluruh data gabungan (Profil, Jurusan, Fasilitas, Berita) |
| `profil.json` | Visi & Misi, Sejarah, Sambutan Kepala Sekolah, Sasaran Mutu, Kurikulum |
| `jurusan.json` | Daftar seluruh program keahlian beserta deskripsi dan gambar |
| `fasilitas.json` | Sarana prasarana, perpustakaan, musholla, UPJ |
| `berita.json` | Berita & artikel terbaru |

---

## 💡 Pemanfaatan Data di Laravel
Data JSON hasil scraping dapat langsung digunakan untuk seeder database Laravel:
```php
$data = json_decode(file_get_contents(base_path('scraping/data/jurusan.json')), true);
```
