Skripsi Final Backup

Repository ini merupakan backup final dari skripsi yang menggunakan CodeIgniter 3.

Persyaratan

PHP versi minimal 8.0 dan maksimal 8.1

MySQL/MariaDB sebagai database

Composer (opsional, jika menggunakan dependensi tambahan)

Instalasi

1. Clone Repository

Clone repository ini menggunakan perintah berikut:

git clone https://github.com/Itsjohanes/skripsifinalbackup.git
cd skripsifinalbackup

2. Konfigurasi Base URL

Edit file application/config/config.php, ubah bagian berikut sesuai dengan URL proyek:

$config['base_url'] = 'http://localhost/skripsifinalbackup/';

3. Konfigurasi Database

Edit file application/config/database.php dan sesuaikan dengan konfigurasi database Anda:

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'nama_database',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
);

4. Import Database

Import file database (.sql) yang ada di dalam folder database/ ke MySQL Anda.

5. Jalankan di Browser

Buka browser dan akses proyek melalui URL:

http://localhost/skripsifinalbackup/

Troubleshooting

Pastikan PHP yang digunakan sesuai dengan versi yang disarankan (8.0 - 8.1)

Periksa konfigurasi database jika terjadi error koneksi

Cek logs/ jika ada error

Lisensi

Proyek ini dibuat untuk keperluan skripsi dan tidak untuk tujuan komersial.

Jika ada pertanyaan atau kendala, silakan hubungi pengembang repository ini.

