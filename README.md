# RentalKu - Tugas Akhir Laravel
Nama: Aqbil Rizky  
NIM: 20240801316

## Fitur
- Landing page
- Dashboard statistik
- CRUD Mobil
- CRUD Pelanggan
- Pencarian, pagination, validasi, dan konfirmasi hapus

## Cara Menjalankan
1. Pastikan PHP 8.2+, Composer, MySQL/XAMPP tersedia.
2. Ekstrak folder lalu buka terminal di folder proyek.
3. Jalankan `composer install`.
4. Salin `.env.example` menjadi `.env`.
5. Buat database MySQL bernama `rentalku`.
6. Jalankan `php artisan key:generate`.
7. Jalankan `php artisan migrate --seed`.
8. Jalankan `php artisan serve`.
9. Buka `http://127.0.0.1:8000`.

## GitHub
Buat repository publik, lalu lakukan commit bertahap, misalnya:
- initial Laravel project
- add mobil CRUD
- add pelanggan CRUD
- add dashboard and landing page
- improve validation and UI
