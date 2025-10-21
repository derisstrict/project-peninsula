<br>
<p align="center"><img width="500" alt="The Peninsula Island(1)" src="https://github.com/user-attachments/assets/a89dd069-4ed8-4770-b938-e757bb8fdc04" /></p>
<br>
<p align="center">Projek untuk memenuhi tugas dari sistem pembelajaran berbasis projek atau Project Based Learning (PBL)</p>

## Setup Awal
Kalo udah selesai clone copy dan jalanin command ini **satu-satu** di dalam folder projek `cd <folder_projek>` atau bisa klik di address bar abistu ketik `cmd`. Untuk liat masing-masing [fungsi dari commandnya](https://medium.com/@rajvir.ahmed.shuvo/setting-up-an-existing-laravel-project-from-git-a-step-by-step-guide-7dec48bdc5f).

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
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



