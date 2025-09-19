# Login-Rental-Alat-Berat-CodeIgniter-2

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-orange.svg)
![PHP](https://img.shields.io/badge/PHP-7.x-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.x-green.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-purple.svg)

Sistem autentikasi login untuk aplikasi rental alat berat dengan database MySQL yang terintegrasi dengan framework CodeIgniter.

## Fitur

- Halaman login yang responsif dan modern
- Validasi form input
- Session management
- Enkripsi password dengan MD5
- Proteksi halaman berdasarkan status login
- Notifikasi error untuk login gagal
- Desain UI yang menarik dengan SB Admin 2

## Struktur Direktori
<img width="206" height="332" alt="image" src="https://github.com/user-attachments/assets/72042729-8fa7-479c-ac9b-d8faabf62de9" />


## Struktur Database

Tabel: `admin`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_admin | INT(11) | Primary Key, Auto Increment |
| username | VARCHAR(50) | Username untuk login |
| password | VARCHAR(255) | Password terenkripsi dengan MD5 |
| nama_admin | VARCHAR(100) | Nama lengkap admin |
| email | VARCHAR(100) | Email admin |
| level | ENUM('admin', 'superadmin') | Level akses admin |
| status | ENUM('aktif', 'nonaktif') | Status akun admin |

Tabel: `ci_sessions` (untuk session management)

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id | VARCHAR(40) | Primary Key |
| ip_address | VARCHAR(45) | IP Address user |
| timestamp | INT(10) | Timestamp aktivitas |
| data | BLOB | Data session |

## .htaccess
``RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]``

## Screenshot Aplikasi
- Login Page
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/960653c3-670a-4254-9360-2eae24b6bc66" />

---
**luqmanaru**

Ini adalah proyek pengembangan web lanjut untuk memenuhi tugas kuliah Pemrograman Web Lanjut
