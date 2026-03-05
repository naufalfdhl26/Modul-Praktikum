
### 1. Deskripsi
Proyek ini merupakan bentuk implementasi praktis dari modul Sistem Informasi Berbasis Web. Fokus utama dari pengembangan ini adalah untuk memahami dan menerapkan logika dasar bahasa pemrograman PHP sebagai skrip yang berjalan di sisi server. Sistem yang dibangun berupa purwarupa otentikasi pengguna (proses masuk dan keluar sistem) sederhana yang bertujuan untuk mendemonstrasikan bagaimana sebuah aplikasi web mengenali, mengingat, dan membatasi hak akses penggunanya.

### 2. Logika Konsep Penyimpanan Data
Sistem otentikasi yang dibangun tidak sekadar memvalidasi data, tetapi juga menjaga status pengguna agar tetap dikenali selama menavigasi halaman web. Hal ini dicapai melalui dua pendekatan logika utama:

* **Manajemen Sesi (Session):** Logika ini digunakan untuk menciptakan ruang memori sementara di dalam server. Ketika pengguna berhasil tervalidasi, server akan mencatat identitas pengguna tersebut. Selama catatan ini masih ada, pengguna dapat berpindah dari satu halaman ke halaman lain tanpa harus memasukkan kata sandi berulang kali. Saat pengguna memutuskan untuk keluar dari sistem, atau menutup peramban, catatan memori ini akan dihancurkan sepenuhnya demi keamanan.
* **Manajemen Kuki (Cookies):** Berbeda dengan sesi yang disimpan di server, logika kuki bekerja dengan cara menitipkan sebuah berkas teks kecil di dalam peramban (browser) milik pengguna. Pada proyek ini, kuki dimanfaatkan untuk menjalankan fitur pengingat atau "remember me". Jika fitur ini diaktifkan saat proses masuk, sistem akan meninggalkan jejak di peramban pengguna sehingga pada kunjungan berikutnya, sistem sudah mengenali preferensi pengguna tersebut secara otomatis sebelum sesi baru dibuat.

### 3. Struktur Organisasi Berkas
Untuk menjaga agar sistem tetap terstruktur dan rapi, berkas-berkas proyek dipisahkan berdasarkan fungsinya. Pemisahan ini memastikan bahwa bagian antarmuka (visual) tidak bercampur secara langsung dengan bagian pemrosesan logika.

* **Berkas `index.php`**: Berfungsi sebagai halaman beranda utama.
* **Berkas `login.php`**: Berfungsi sebagai halaman antarmuka formulir otentikasi.
* **Direktori `controller`**: Sebuah ruang khusus yang dibuat untuk menampung berkas-berkas pemrosesan logika di belakang layar.
    * **Berkas `proses_login.php`**: Bertugas menerima data dari formulir, memvalidasinya, dan menentukan apakah pengguna berhak masuk atau tidak.
    * **Berkas `logout.php`**: Bertugas menangani permintaan pengguna untuk mengakhiri akses dan menghapus rekam jejak identitas mereka di server.

### 4. Alur Kerja dan Logika Sistem
Sistem ini dirancang dengan alur kerja yang sangat memperhatikan pengalaman dan pembatasan akses pengguna. Berikut adalah rincian logika pada masing-masing bagian:

**A. Logika pada Halaman Beranda**
Saat pengguna membuka halaman utama, sistem akan melakukan pengecekan status terlebih dahulu. Jika sistem mengenali bahwa pengguna tersebut belum memiliki akses masuk, maka bilah navigasi hanya akan menampilkan tombol untuk menuju halaman otentikasi. Namun, jika sistem mendeteksi rekam jejak pengguna yang sudah masuk, antarmuka akan menyesuaikan diri dengan menampilkan sapaan nama pengguna tersebut beserta tombol untuk keluar dari sistem.

**B. Logika pada Halaman Formulir Masuk**
Halaman ini memuat formulir yang meminta identitas pengguna, kata sandi, serta menawarkan opsi pengingat (remember me). Terdapat sebuah logika perlindungan di halaman ini: apabila ada pengguna yang sudah berhasil masuk ke dalam sistem mencoba untuk mengakses halaman formulir ini lagi, sistem akan menolaknya dan langsung mengarahkan pengguna tersebut kembali ke halaman beranda. Hal ini mencegah terjadinya tumpang tindih status akses.

**C. Logika Pemrosesan Akses Masuk**
Setelah pengguna menekan tombol masuk, data akan dikirim ke pengontrol. Di sini, sistem mengevaluasi kecocokan data. Karena belum menggunakan basis data yang kompleks, sistem akan mencocokkan inputan dengan data statis yang sudah ditetapkan. Jika cocok, sistem akan memberikan izin masuk dengan mencatat identitas pengguna ke dalam memori server. Di saat yang sama, sistem mengevaluasi apakah kotak opsi pengingat dicentang. Jika iya, sistem akan memberikan instruksi tambahan kepada peramban pengguna untuk menyimpan jejak kuki.

**D. Logika Pemrosesan Keluar Sistem**
Ketika pengguna memilih untuk mengakhiri sesi, sistem akan memanggil pengontrol keluar. Logika yang berjalan di sini adalah pembersihan total. Sistem akan mencari catatan identitas pengguna tersebut di dalam memori server dan menghancurkannya. Setelah dipastikan bersih, pengguna akan dikembalikan ke halaman beranda sebagai pengunjung anonim biasa.

### 5. Panduan Simulasi Lingkungan Lokal
Untuk melihat jalannya logika sistem ini secara langsung, proyek harus dijalankan di atas lingkungan server simulasi.

1. Siapkan aplikasi penyedia layanan server lokal pada komputer Anda, seperti XAMPP atau perangkat lunak sejenis.
2. Salin seluruh direktori proyek ini dan tempatkan ke dalam folder penyedia layanan web (misalnya folder `htdocs` pada aplikasi XAMPP).
3. Aktifkan modul server Apache melalui panel kontrol aplikasi tersebut.
4. Buka peramban web Anda dan akses sistem dengan mengetikkan tautan `http://localhost/` diikuti dengan nama direktori proyek Anda.

---
*Dokumentasi ini disusun secara komprehensif untuk memenuhi standar pelaporan tugas praktikum, menjelaskan tidak hanya wujud akhir dari program, melainkan juga logika arsitektur yang membangunnya.*
