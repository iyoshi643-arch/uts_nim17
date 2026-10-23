# UTS Rekayasa Web - Daftar Wisata Alam (NIM akhir 7)

Berkas di folder ini adalah **overlay**: timpa ke proyek Laravel 13 baru.

## 1. Buat proyek Laravel
```bash
composer create-project laravel/laravel uts_nim17
cd uts_nim17
```

## 2. Salin berkas dari paket ini ke proyek (timpa jika diminta)
Salin folder `app`, `database`, `resources`, `routes`, `public` ke root proyek.

## 3. Atur database
Buat database kosong `db_uts_nim17` di MySQL (phpMyAdmin / HeidiSQL), lalu isi `.env`
sesuai `.env.example.snippet`.

## 4. Jalankan
```bash
php artisan migrate
php artisan db:seed
php artisan serve
```
Buka http://127.0.0.1:8000

## 5. Upload ke GitHub
```bash
git init
git add .
git commit -m "UTS Rekayasa Web - Daftar Wisata Alam"
git branch -M main
git remote add origin https://github.com/USERNAME/UTS_NAMA_NIM_KODEKELAS.git
git push -u origin main
```

## Catatan
- Gambar di `public/assets/images/` adalah ilustrasi pengganti. Boleh diganti foto asli
  dengan nama file yang sama (atau ubah kolom `image` di `DestinationSeeder`).
- Bootstrap 5.3.3 sudah ada di `public/Bootstrap/` sesuai soal.
