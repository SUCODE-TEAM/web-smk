#!/usr/bin/env python3
"""
Scraper Data SMK Negeri 2 Yogyakarta (https://www.smk2-yk.sch.id/)
Dibuat untuk mengekstrak data profil, program keahlian, berita, fasilitas, dan informasi sekolah.
"""

import json
import os
import re
from urllib.parse import urljoin
import requests
from bs4 import BeautifulSoup

BASE_URL = "https://www.smk2-yk.sch.id/"
HEADERS = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36",
    "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
    "Accept-Language": "id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
}

OUTPUT_DIR = os.path.join(os.path.dirname(os.path.abspath(__file__)), "data")


def get_soup(url: str) -> BeautifulSoup | None:
    """Mengambil dan mem-parsing halaman web menjadi objek BeautifulSoup."""
    try:
        response = requests.get(url, headers=HEADERS, timeout=15)
        response.raise_for_status()
        response.encoding = response.apparent_encoding or "utf-8"
        return BeautifulSoup(response.text, "html.parser")
    except Exception as e:
        print(f"[ERROR] Gagal mengakses {url}: {e}")
        return None


def clean_text(text: str) -> str:
    """Membersihkan whitespace ganda dan newline berlebih."""
    if not text:
        return ""
    text = re.sub(r"\s+", " ", text)
    return text.strip()


def extract_main_content(soup: BeautifulSoup) -> list[str]:
    """Mengekstrak teks konten utama tanpa menu navigasi dan footer."""
    if not soup:
        return []

    # Buat clone/copy dari soup agar tidak merusak objek asli jika diperlukan
    soup_copy = BeautifulSoup(str(soup), "html.parser")

    # Hapus elemen yang bukan konten inti
    for element in soup_copy.find_all(["nav", "footer", "header", "script", "style", "marquee"]):
        element.decompose()
    for nav_el in soup_copy.find_all(id=re.compile(r"nav|menu|dropdown|modal", re.I)):
        nav_el.decompose()
    for class_el in soup_copy.find_all(class_=re.compile(r"side-nav|navbar|menu|footer", re.I)):
        class_el.decompose()

    contents = []
    # Ambil paragraf dan heading dari area konten utama
    for tag in soup_copy.find_all(["h1", "h2", "h3", "h4", "h5", "p", "li"]):
        txt = clean_text(tag.get_text())
        if txt and len(txt) > 3 and not any(nav_kw in txt for nav_kw in ["Tentang SMK→", "Program Keahlian→", "Organisasi→", "Fasilitas→"]):
            contents.append(txt)

    # Hilangkan duplikat yang berurutan
    unique_contents = []
    for c in contents:
        if not unique_contents or unique_contents[-1] != c:
            unique_contents.append(c)

    return unique_contents


def scrape_homepage():
    """Scraping informasi dasar dari homepage."""
    print("-> Mengambil data Beranda...")
    soup = get_soup(BASE_URL)
    if not soup:
        return {}

    title = soup.title.string.strip() if soup.title else "SMK 2 Yogyakarta"
    running_text = ""
    marquee = soup.find("marquee")
    if marquee:
        running_text = clean_text(marquee.get_text())

    return {
        "title": title,
        "running_text": running_text,
        "base_url": BASE_URL,
    }


def scrape_profile_pages():
    """Scraping halaman profil dan tentang sekolah."""
    print("-> Mengambil data Profil & Tentang Sekolah...")
    pages = {
        "sambutan_kepala_sekolah": "tentang/sambutan",
        "sejarah": "tentang/sejarah",
        "visi_misi": "tentang/visimisi",
        "sasaran_mutu": "tentang/sasaran",
        "profil_tamatan": "tentang/profil",
        "kurikulum": "tentang/kurikulum",
    }

    profile_data = {}
    for key, path in pages.items():
        url = urljoin(BASE_URL, path)
        print(f"   Mengakses: {url}")
        soup = get_soup(url)
        if not soup:
            continue

        paragraphs = extract_main_content(soup)
        profile_data[key] = {
            "url": url,
            "title": soup.title.string.strip() if soup.title else key,
            "content": paragraphs,
        }

    return profile_data


def scrape_majors():
    """Scraping data Program Keahlian / Jurusan."""
    print("-> Mengambil data Program Keahlian (Jurusan)...")
    majors_list = [
        {"code": "tkr", "name": "Teknik Kendaraan Ringan Otomotif", "path": "program/tkr"},
        {"code": "sija", "name": "Sistem Informatika Jaringan dan Aplikasi", "path": "program/tkj"},
        {"code": "tav", "name": "Teknik Audio dan Video", "path": "program/tav"},
        {"code": "titl", "name": "Teknik Instalasi Tenaga Listrik", "path": "program/titl"},
        {"code": "tp", "name": "Teknik Pemesinan", "path": "program/tp"},
        {"code": "dpib", "name": "Desain Pemodelan dan Informasi Bangunan", "path": "program/tgb"},
        {"code": "kgsp", "name": "Konstruksi Gedung, Sanitasi dan Perawatan", "path": "program/tkbb"},
        {"code": "dkv", "name": "Multimedia / Desain Komunikasi Visual", "path": "program/tmm"},
        {"code": "geomatika", "name": "Teknik Geomatika", "path": "program/tgeo"},
    ]

    results = []
    for major in majors_list:
        url = urljoin(BASE_URL, major["path"])
        print(f"   Jurusan: {major['name']} -> {url}")
        soup = get_soup(url)
        details = extract_main_content(soup) if soup else []
        images = []

        if soup:
            for img in soup.find_all("img"):
                src = img.get("src")
                if src and not any(skip in src for skip in ["navlogo", "favicon", "logo", "icon"]):
                    full_img_url = urljoin(BASE_URL, src)
                    if full_img_url not in images:
                        images.append(full_img_url)

        results.append({
            "code": major["code"],
            "name": major["name"],
            "url": url,
            "description": details,
            "images": images[:5],
        })

    return results


def scrape_facilities():
    """Scraping data Fasilitas & Sarana Prasarana."""
    print("-> Mengambil data Fasilitas...")
    facilities = [
        {"name": "Sarana dan Prasarana", "path": "fasilitas/sarana"},
        {"name": "Unit Produksi & Jasa", "path": "fasilitas/upj"},
        {"name": "Perpustakaan", "path": "fasilitas/perpustakaan"},
        {"name": "Musholla", "path": "fasilitas/mushola"},
    ]

    results = []
    for fac in facilities:
        url = urljoin(BASE_URL, fac["path"])
        print(f"   Fasilitas: {fac['name']} -> {url}")
        soup = get_soup(url)
        content = extract_main_content(soup) if soup else []

        results.append({
            "name": fac["name"],
            "url": url,
            "content": content,
        })

    return results


def scrape_latest_news():
    """Scraping berita/artikel terbaru jika tersedia."""
    print("-> Mengambil data Berita / Pengumuman...")
    news_url = urljoin(BASE_URL, "berita")
    soup = get_soup(news_url)
    news_items = []

    if soup:
        cards = soup.find_all(["div", "article"], class_=re.compile(r"card|post|berita|item", re.I))
        for card in cards:
            title_el = card.find(["h4", "h5", "h6", "a"])
            title = clean_text(title_el.get_text()) if title_el else ""
            link = urljoin(BASE_URL, title_el.get("href")) if title_el and title_el.get("href") else ""
            summary_el = card.find("p")
            summary = clean_text(summary_el.get_text()) if summary_el else ""
            img_el = card.find("img")
            img_url = urljoin(BASE_URL, img_el.get("src")) if img_el and img_el.get("src") else ""

            if title and len(title) > 5:
                news_items.append({
                    "title": title,
                    "url": link,
                    "summary": summary,
                    "image": img_url,
                })

    return news_items


def save_json(data, filename: str):
    """Menyimpan dictionary ke file JSON di folder data/."""
    os.makedirs(OUTPUT_DIR, exist_ok=True)
    filepath = os.path.join(OUTPUT_DIR, filename)
    with open(filepath, "w", encoding="utf-8") as f:
        json.dump(data, f, ensure_ascii=False, indent=2)
    print(f"[OK] Disimpan: {filepath}")


def main():
    print("=" * 60)
    print("    SCRAPER DATA SMK NEGERI 2 YOGYAKARTA")
    print(f"    Target: {BASE_URL}")
    print("=" * 60)

    homepage = scrape_homepage()
    profile = scrape_profile_pages()
    majors = scrape_majors()
    facilities = scrape_facilities()
    news = scrape_latest_news()

    all_data = {
        "source": BASE_URL,
        "scraped_at": __import__("datetime").datetime.now().isoformat(),
        "homepage": homepage,
        "profile": profile,
        "majors": majors,
        "facilities": facilities,
        "news": news,
    }

    # Simpan hasil per kategori dan file gabungan
    save_json(all_data, "smk2_lengkap.json")
    save_json(profile, "profil.json")
    save_json(majors, "jurusan.json")
    save_json(facilities, "fasilitas.json")
    if news:
        save_json(news, "berita.json")

    print("=" * 60)
    print(f"[SUKSES] Semua data berhasil di-scrape dan disimpan di: {OUTPUT_DIR}")
    print("=" * 60)


if __name__ == "__main__":
    main()
