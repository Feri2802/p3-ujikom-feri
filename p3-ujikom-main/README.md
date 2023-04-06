
# P3 - Ujikom 2023

Projek UKK p3 - Aplikasi Pengelolaan Laundry
## Installation

Pindahkan folder projects yang di download pada lokasi yang diinginkan. Kemudian jalankan web server `(XAMPP/Laragon)`.

Buka file .env dan ubah isi `DB_DATABASE` menjadi nama database yang akan dipakai. Kemudian buka console.

```bash
  composer update
```
Migrasikan database
```bash
  php artisan migrate:fresh
```
Jalankan project nya
```bash
  php artisan serve
```
