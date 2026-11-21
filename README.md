
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

- ---

## 🚀 Lanjutan Praktikum Laravel (Sistem Templating, CRUD, Migration & Autentifikasi)

Pengembangan lanjutan pada repository yang sama mengikuti *Modul Praktikum Framework Laravel* (Halaman 12–38) dengan riwayat *commit* terstruktur per Bab.

### 📋 Daftar Bab & Fitur Lanjutan
1. **Sistem Templating (Halaman 12–18)**
   - Pemisahan layout utama (`dashboard.blade.php`) menggunakan direktif Blade `@include`, `@yield`, dan `@extends`[cite: 16, 17].
   - Halaman turunan `/dashboard` (Home) dan `/gallery` (Gallery) dengan styling `public/css/style.css`[cite: 13, 17, 18].
2. **Membuat CRUD Data Pegawai (Halaman 19–27)**
   - Pengelolaan tabel `employes` menggunakan Model `Employe` dan `EmployeController`[cite: 19, 20, 21].
   - Fitur lengkap: Tampil Data (`/employe`), Tambah Data (`/employe/create`), Edit Data (`/employe/edit/{id}`), dan Hapus Data[cite: 21, 22, 23, 25, 26].
3. **Migration, Seeder & Factory (Halaman 27–33)**
   - Pembuatan skema tabel `users` dan `employes` melalui Laravel Migration[cite: 27, 29, 30].
   - Pengisian akun admin (`UserSeeder`) serta 10 data dummy pegawai menggunakan Faker (`EmployeSeeder`)[cite: 30, 31, 32].
4. **Membuat Autentifikasi (Halaman 33–38)**
   - Halaman Login (`/`) menggunakan `AuthController` dengan verifikasi `Hash::check` dan `Session`[cite: 34, 35, 36].
   - Proteksi rute dashboard dan CRUD menggunakan custom middleware `IsLogin` (`islogin`) serta fitur Logout (`/logout`)[cite: 37, 38].

### 🔐 Akun Login (Hasil Seeder)
- **Email:** `ferandyega12@gmail.com`
- **Password:** `123456`[cite: 30]
