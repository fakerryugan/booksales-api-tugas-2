# Tugas 2 

**Nama:** FATKUR ROHMAN IRHAM 
**KAMPUS:** POLITEKNIK NEGERI BANYUWANGI

Proyek ini adalah hasil pengerjaan tugas untuk membuat tabel `Book` dan `Author` menggunakan fitur Migration dan Seeder pada framework Laravel, serta menampilkan datanya melalui antarmuka (view).

## Instruksi Tugas

1. Membuat tabel **Book** dan **Author** menggunakan fitur Laravel Migration dengan mengikuti susunan *brief* yang telah disediakan.
2. Memberikan **5 data dummy** yang dibuat menggunakan Laravel Seeder.
3. Mengatur file model, controller, routing, dan view agar data yang sudah dibuat dapat ditampilkan ke *view*.
4. *Push* ke GitHub dan cantumkan *link repository* beserta file Migration dan Seeder ke kantung tugas.

## Fitur dan Penyelesaian

- **Database Migrations:** Terdapat file migrasi untuk membuat tabel `books` dan `authors`.
- **Database Seeders:** Terdapat file seeder (`BookSeeder` dan `AuthorSeeder`) yang secara otomatis mengisi tabel `books` dan `authors` masing-masing dengan 5 data *dummy*.
- **Routing & Controllers:** 
  - Rute `/book` diarahkan ke `BookController` untuk menampilkan daftar data buku.
  - Rute `/authors` diarahkan ke `AuthorController` untuk menampilkan daftar data penulis.
- **Views:** Tampilan (*View*) telah dikonfigurasi untuk menampilkan data yang di-*fetch* dari database ke layar.

## Instalasi dan Cara Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini untuk menguji proyek di lingkungan lokal:

1. **Clone Repository (Jika belum di-clone)**
   ```bash
   cd booksales-api-tugas-2
   ```

2. **Install Dependencies**
   Install *Library* PHP yang dibutuhkan dengan Composer:
   ```bash
   composer install
   ```

3. **Siapkan File Konfigurasi (Environment)**
   Buat salinan file konfigurasi `.env` dan letakkan *app key*:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   Sesuaikan kredensial koneksi *database* (seperti `DB_DATABASE`, `DB_USERNAME`, dll) pada file `.env` yang barusan dibuat.
   ```text
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan Migrasi dan Seeder**
   Pastikan *database* yang tertulis di `.env` sudah kamu buat. Setelah itu, eksekusi sintaks berikut untuk memigrasi tabel beserta menanam isinya (*seed*):
   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan Server Lokal**
   Nyalakan *application development server*:
   ```bash
   php artisan serve
   ```
   Aplikasi berjalan. Sekarang buka browser kamu dan akses:  
   👉 **http://127.0.0.1:8000/book**  
   👉 **http://127.0.0.1:8000/authors**

## Posisi File Penting

Berikut adalah letak dari file migrasi dan file seeder jika sewaktu-waktu ingin ditinjau:

- **Migration Penulis:** `database/migrations/..._create_authors_table.php`
- **Migration Buku:** `database/migrations/..._create_books_table.php`
- **Seeder Penulis:** `database/seeders/AuthorSeeder.php`
- **Seeder Buku:** `database/seeders/BookSeeder.php`
- **Controller:** Terdapat dalam `app/Http/Controllers/`
- **View:** Terdapat dalam `resources/views/`

---

## Dokumentasi dan Bukti Pengerjaan

Berikut adalah *screenshot* kode program dan hasil akhirnya ketika dijalankan di *browser*.

### 1. Kode Migration dan Seeder
<img width="1070" height="464" alt="Screenshot 2026-04-27 074441" src="https://github.com/user-attachments/assets/03bdf7fb-a7e7-4ea7-9773-fe597178d049" />
<img width="847" height="465" alt="Screenshot 2026-04-27 074422" src="https://github.com/user-attachments/assets/3267edb0-9129-4a59-8338-cd6cc440ae51" />
<img width="1245" height="232" alt="Screenshot 2026-04-27 074512" src="https://github.com/user-attachments/assets/6807b5ff-6c07-42c0-b89e-55c78dff6de9" />
<img width="1224" height="222" alt="Screenshot 2026-04-27 074504" src="https://github.com/user-attachments/assets/120a43b2-9952-4367-b173-05c936f3b790" />

**Penjelasan Singkat:** Gambar di atas adalah baris kode dari *Migration* dan *Seeder* untuk tabel `Book` dan `Author` yang sudah saya buat.

### 2. Kode Model, Controller, dan Routing
<img width="515" height="233" alt="Screenshot 2026-04-27 074610" src="https://github.com/user-attachments/assets/52b1ac6e-bde7-4506-bcd6-fd89b748a520" />
<img width="549" height="296" alt="Screenshot 2026-04-27 074602" src="https://github.com/user-attachments/assets/cecad9d5-0e1f-481c-bb05-246da460a321" />
<img width="1004" height="432" alt="Screenshot 2026-04-27 074556" src="https://github.com/user-attachments/assets/ced3cfb1-da57-4fa0-871c-bc88d97180a8" />
<img width="543" height="265" alt="Screenshot 2026-04-27 074639" src="https://github.com/user-attachments/assets/5f70ccbe-3b11-44ed-8d28-4c206ab88a08" />
<img width="627" height="265" alt="Screenshot 2026-04-27 074618" src="https://github.com/user-attachments/assets/7c3ce763-8d6b-4a76-abe2-30a7edf040b8" />
**Penjelasan Singkat:** Potongan kode di atas menampilkan pengaturan rute pada file `web.php` berserta *Controller* dan *Model* yang menghubungkan data ke antarmuka (*view*).

### 3. Hasil Tampilan Data / View di Browser
**Data Buku (`/book`)**
<img width="1844" height="718" alt="Screenshot 2026-04-27 074335" src="https://github.com/user-attachments/assets/c85aa995-4c9b-48c8-b82d-38914d3ef58f" />


**Data Penulis (`/authors`)**
<img width="1862" height="451" alt="Screenshot 2026-04-27 074347" src="https://github.com/user-attachments/assets/867f6f18-68e9-452d-836e-fe9de78983e2" />
 

**Penjelasan Singkat:** Ini adalah *screenshot* hasil akhir dari *browser*. Data *dummy* berhasil di-*fetch* dari *database* dan tampil sempurna.
