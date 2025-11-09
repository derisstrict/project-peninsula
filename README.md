<br>
<p align="center"><img width="500" alt="The Peninsula Island(1)" src="https://github.com/user-attachments/assets/a89dd069-4ed8-4770-b938-e757bb8fdc04" /></p>
<br>
<p align="center">Projek untuk memenuhi tugas dari sistem pembelajaran berbasis projek atau Project Based Learning (PBL)</p>

## Setup Awal
Kalo udah selesai clone githubnya, jalanin command ini di dalam folder projek di cmd, untuk buka cmd di dalem folder projek bisa klik di address bar di file explorer pas lagi buka folder projek abistu ketik `cmd`, kalo gasalah dari klik kanan juga bisa untuk buka cmd tapi gatau udah lupa.

```bash
composer run setup
```

## Local Server
Pake command ini untuk buat tes front-end aja (pengganti XAMPP/Laragon untuk testing):
```bash
composer run dev
```
Pake command ini untuk buat webserver lebih ke back-end (pengganti XAMPP/Laragon untuk testing):
```bash
php artisan serve
```
Untuk migrasi database: (masih belum perlu)
```bash
php artisan migrate
```
Untuk seed dummy data ke database: (masih belum perlu)
```bash
php artisan db:seed
```



