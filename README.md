# tealinux-studio
Racik OS-mu sendiri! - Buat sistem oprasimu sendiri hanya dalam beberapa klik saja! | studio.tealinuxos.org

## Cara menjalankan proyek ini di mesin lokal mu

### Cara Install

- Clone _repo_ ini di _localhost_ kamu
- masuk ke folder yang baru di _clonning_ pake terminal "cd tealinuxstudio"
- buat _database_ "tealinuxstudio"
- setting database di .env | USER dan Password database
- ketik perintah "php artisan migrate --seed" untuk migrasi dan _seeding_ data ke _database_
- habis itu "php artisan serve"
- udah bisa di akses ke localhost:8000

### Masuk ke sistem

- kalo mau coba _login_ lewat : /auth/login pake :

    user : dikyarga  
    password : secret

### Buat OS baru
- masuk ke menu new task / localhost:8000/task/new
