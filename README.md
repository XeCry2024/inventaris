# Aplikasi Inventaris

Tugas Praktikum Pemrograman Web: Studi Kasus Aplikasi Inventaris.

Dibuat dengan Laravel, template SB Admin 2, MySQL, notifikasi `mckenziearts/laravel-notify`, dan cetak PDF `barryvdh/laravel-dompdf`.

## Fitur

- Login dengan pengecekan role (`admin` diarahkan ke `/admin`, `kasir` ke `/kasir`)
- Dashboard admin
- CRUD Data Barang (tambah, tampil dengan paginasi, edit, hapus) + notifikasi
- Menu Laporan dan cetak laporan barang ke PDF

## Struktur Database (`inventaris`)

| Tabel    | Kolom                                    |
|----------|------------------------------------------|
| `users`  | id, username, password (bcrypt), role    |
| `barang` | id, kode, nama, stok                     |

## Cara Menjalankan

1. Jalankan Apache & MySQL (Laragon/XAMPP), lalu buat database `inventaris`.
2. Clone repo ini dan masuk ke foldernya.
3. Jalankan perintah berikut:

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```

4. Buka `http://127.0.0.1:8000` lalu login:
   - Admin: username `admin`, password `admin`
   - Kasir: username `kasir`, password `kasir`

## Struktur File Utama

```
app/Http/Controllers/LoginController.php
app/Http/Controllers/AdminController.php
app/Http/Controllers/LaporanController.php
app/Models/User.php
app/Models/Barang.php
routes/web.php
resources/views/login.blade.php
resources/views/layouts/master.blade.php
resources/views/admin/beranda.blade.php
resources/views/admin/barang/{index,tambah,edit}.blade.php
resources/views/admin/laporan/{index,pdf_barang}.blade.php
resources/views/kasir/beranda.blade.php
public/sbadmin/   (template SB Admin 2 + logo.png)
```
