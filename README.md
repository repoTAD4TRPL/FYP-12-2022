# FYP-12-2022
Project repository for group 12

# Rancang bangun aplikasi e-marketplace jemaat gereja HKBP

Nama aplikasi : HKBP Store

Jenis aplikasi : Aplikasi Web

Link Hosting : http://hkbp-emarketplace.herokuapp.com/

## Persiapan Instalasi

Spesifikasi
1. Sistem operasi Microsoft Windows 10
2. Memory 4GB
3. Processor Intel Core i5
4. SSD 120GB

Kebutuhan Tools
1. Database Server PostgreSQL(pgAdmin)
2. Browser (chrome,mozilla,edge)
3. Editor (VS Code)

Akun User

1. Admin
   Username : admin@gmail.com
   Password : admin123
3. Pembeli
   Username : pangihutan@gmail.com
   Password : pangihutan123
5. Penjual
   Username : masturi@gmail.com
   Password : masturi123

## Langkah-langkah instalasi
- Pertama, buka direktori tempat project anda, lalu buka terminal.
- Ketik command 
  `git clone https://github.com/hengkihth/SCMProject.git`
- Jika sudah selesai clone, akses folder laravel-blog lalu ketik perintah melalui terminal
  `composer install`.
- Setelah itu, jalankan perintah `cp .env.example .env` di direktori app laravelnya.
- Kemudian jalankan command `php artisan key:generate`.
- Lakukan konfigurasi database di env menggunakan driver pgsql
- Buka aplikasi pgAdmin
- Buat database baru dengan nama db_emarketplace
- Restore database yang terletak pada folder database/restore
- Jalankan app laravel dengan `php artisan serve`.


