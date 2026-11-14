
# Praktikum Framework Laravel — Parsing Data ke View (Halaman 12)

Repository ini berisi penyelesaian tugas latihan **Bab Parsing Data ke View (Halaman 12)** berdasarkan *Modul Praktikum Framework Laravel* oleh Rudy Eko Prasetya, S.Kom.

---

## 📋 Daftar Fitur & Ketentuan Tugas

1. **Daftar Mahasiswa (`/daftar/mahasiswa`)**
   - Menggunakan `MahasiswaController` untuk mengirimkan array data mahasiswa ke view menggunakan teknik *parsing data* Blade (`{{ ... }}`).
   - Menampilkan tabel **DAFTAR MAHASISWA** (Nama, Alamat, dan Gender) dengan tampilan *Dark Mode Modern*.

2. **Kalkulator Luas Segitiga (`/kalkulator/segitiga`)**
   - Menggunakan `KalkulatorController` untuk menangani form input (alas & tinggi) serta memproses perhitungan luas segitiga ($\frac{1}{2} \times \text{alas} \times \text{tinggi}$).
   - Dilengkapi proteksi CSRF token (`@csrf`) pada pengiriman data metode `POST`.

3. **Navigasi & Desain Antarmuka**
   - Menggunakan CSS kustom bertema *Dark Glassmorphism* dengan navigasi cepat antar-halaman.

---

## 🛠️ Teknologi yang Digunakan

- **Framework:** Laravel 8.x (atau versi yang menyesuaikan)
- **Bahasa Pemrograman:** PHP, HTML5, CSS3
- **Template Engine:** Laravel Blade
- **Version Control:** Git & GitHub

---

## 📂 Struktur File Utama yang Dibuat/Dimodifikasi

```text
├── app/
│   └── Http/
│       └── Controllers/
│           ├── MahasiswaController.php      # Controller untuk data daftar mahasiswa
│           └── KalkulatorController.php     # Controller untuk perhitungan luas segitiga
├── resources/
│   └── views/
│       ├── daftar_mahasiswa.blade.php       # Tampilan tabel daftar mahasiswa
│       └── kalkulator_segitiga.blade.php    # Tampilan form & hasil kalkulator segitiga
└── routes/
    └── web.php                              # Konfigurasi routing aplikasi
```

---

## 🚀 Cara Menjalankan Project Secara Lokal

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/ferandyega13-droid/NAMA-REPO-KAMU.git
   cd NAMA-REPO-KAMU
   ```

2. **Install dependensi Composer:**
   ```bash
   composer install
   ```

3. **Salin file konfigurasi environment & generate key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan server development Laravel:**
   ```bash
   php artisan serve
   ```

5. **Akses melalui browser:**
   - Laman Daftar Mahasiswa: `http://127.0.0.1:8000/daftar/mahasiswa`
   - Laman Kalkulator Segitiga: `http://127.0.0.1:8000/kalkulator/segitiga`

---

## 👤 Identitas Pembuat

- **Nama:** Ferandy Ega Putra Pratama
- **GitHub:** [@ferandyega13-droid](https://github.com/ferandyega13-droid)
