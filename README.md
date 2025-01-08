# Proyek Kartu Ucapan dan Kenangan

Proyek ini adalah aplikasi sederhana berbasis web yang memungkinkan pengguna untuk berbagi ucapan, menyimpan kenangan, dan menikmati dekorasi bertema bunga. Proyek ini dibuat menggunakan PHP dan HTML tanpa JavaScript.

## Struktur Proyek

Berikut adalah file yang tersedia dan fungsinya:

1. **`index.php`**  
   Halaman utama untuk menyambut pengguna dan memberikan navigasi ke bagian lain dari aplikasi.

2. **`ucapan.php`**  
   Halaman untuk membuat dan menampilkan kartu ucapan. Pengguna dapat mengisi pesan dan melihat hasilnya dalam format kartu ucapan.

3. **`kenangan.php`**  
   Halaman ini memungkinkan pengguna untuk menulis dan menyimpan kenangan. Data dapat disimpan menggunakan mekanisme sederhana seperti file teks atau database.

4. **`flower.html`**  
   Halaman statis yang berisi dekorasi bertema bunga untuk mempercantik tampilan.

## Cara Menggunakan

1. **Persiapan Server**
   - Pastikan Anda memiliki server lokal seperti XAMPP, WAMP, atau MAMP yang mendukung PHP.
   - Tempatkan semua file proyek di direktori server lokal (misalnya, folder `htdocs` di XAMPP).

2. **Menjalankan Proyek**
   - Buka browser Anda.
   - Akses proyek melalui URL berikut:
     ```
     http://localhost/nama-folder-proyek/index.php
     ```

3. **Navigasi Halaman**
   - Gunakan menu atau tautan pada halaman utama untuk berpindah ke halaman **Ucapan**, **Kenangan**, atau **Dekorasi Bunga**.

## Teknologi yang Digunakan

- **PHP**: Untuk pemrosesan sisi server.
- **HTML** dan **CSS**: Untuk struktur dan desain halaman.
- **File Teks atau Database (opsional)**: Untuk menyimpan data seperti kenangan dan pesan ucapan.

## Fitur Utama

- Halaman utama dengan navigasi mudah.
- Formulir untuk menulis kenangan yang dapat disimpan dan dilihat kembali.
- Formulir untuk membuat kartu ucapan yang dipersonalisasi.
- Halaman dekorasi statis dengan tema bunga.

## Kontribusi

Jika Anda ingin berkontribusi:
1. Fork repositori ini.
2. Buat branch baru untuk perubahan Anda:
   ```bash
   git checkout -b fitur-baru
