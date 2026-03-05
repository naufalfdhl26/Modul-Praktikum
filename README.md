# [cite_start]Laporan Implementasi Proyek: Sistem Informasi Berbasis Web [cite: 1]
## [cite_start]Topik: Pengenalan Dasar PHP, Session, dan Cookie [cite: 3]

### 1. Deskripsi Proyek
[cite_start]Proyek ini merupakan implementasi dari sistem otentikasi sederhana menggunakan bahasa pemrograman PHP (Hypertext Preprocessor)[cite: 7]. [cite_start]Sesuai dengan materi pembelajaran, proyek ini memanfaatkan kemampuan PHP sebagai bahasa *scripting server-side* yang dieksekusi di server sebelum dikirimkan ke peramban (browser) klien[cite: 7, 8]. [cite_start]Tujuan utama dari pengembangan sistem ini adalah untuk memproses data dari formulir input pengguna serta mengatur hak akses pengguna menggunakan pengelolaan *Session* dan *Cookies*[cite: 11, 13].

### 2. Konsep Dasar yang Diterapkan
Pengembangan sistem otentikasi ini mengandalkan dua mekanisme pengelolaan *state* pada aplikasi web:
* [cite_start]**Session:** Session merupakan teknik penyimpanan data sementara di server yang digunakan untuk mengenali pengguna saat berpindah halaman selama sesi tersebut masih aktif[cite: 154]. [cite_start]Mekanisme ini dinilai lebih aman karena data disimpan secara internal di server[cite: 155, 156]. [cite_start]Secara *default*, data session akan otomatis hilang saat sesi berakhir atau peramban ditutup[cite: 157, 158]. [cite_start]Setiap file yang membutuhkan akses ke data session diwajibkan memanggil fungsi `session_start()` pada baris awal kodenya[cite: 165, 166].
* [cite_start]**Cookies:** Cookies adalah file teks berukuran kecil yang disimpan oleh peramban di sisi klien (komputer pengguna)[cite: 160, 161]. [cite_start]Dalam proyek ini, cookies dimanfaatkan untuk mengingat informasi preferensi pengguna, khususnya untuk mengelola status "ingat saya" (*remember me*) saat pengguna melakukan *login*[cite: 160]. [cite_start]Pembuatan cookies menggunakan fungsi `setcookie()` yang dapat diatur waktu kedaluwarsanya (*expiration time*)[cite: 186, 161].

### 3. Struktur Direktori dan Arsitektur Sistem
Sesuai dengan instruksi pengerjaan modul, proyek ini telah diorganisasikan ke dalam beberapa berkas dan direktori untuk memisahkan antara antarmuka dan logika pemrosesan. Struktur utama terdiri dari:
* [cite_start]`index.php`: Merupakan halaman beranda utama yang diubah dari format awal `index.html`[cite: 195].
* [cite_start]`login.php`: Berfungsi sebagai antarmuka halaman otentikasi tempat pengguna memasukkan kredensial[cite: 195].
* [cite_start]`controller/`: Sebuah folder baru yang dibuat khusus untuk menyimpan berkas-berkas pengontrol logika sistem[cite: 195].
    * [cite_start]`controller/proses_login.php`: Berkas yang menangani logika pemrosesan data saat pengguna mencoba masuk[cite: 195, 199].
    * [cite_start]`controller/logout.php`: Berkas yang berisi logika untuk mengeluarkan pengguna dari sistem (terminasi sesi)[cite: 195, 199].

### 4. Spesifikasi Fungsional Fitur
Sistem yang dibangun memiliki beberapa alur dan kondisi spesifik sebagai berikut:

**A. Halaman Beranda (`index.php`)**
* [cite_start]Pada antarmuka navigasi, terdapat tombol *login* yang mengarahkan pengguna ke halaman `login.php`[cite: 196].
* Halaman ini memiliki kondisi pengecekan sesi. [cite_start]Jika terdeteksi bahwa pengguna sudah melakukan *login*, maka antarmuka akan berubah untuk menampilkan nama pengguna (username) dan menyediakan tombol untuk *logout*[cite: 199].

**B. Halaman Otentikasi (`login.php`)**
* [cite_start]Sistem memuat fungsi `session_start()` dan kondisi pengecekan di awal halaman[cite: 165, 198]. [cite_start]Jika pengguna yang sudah berstatus *login* mencoba mengakses halaman ini, sistem akan secara otomatis mengalihkan (*redirect*) mereka kembali ke halaman beranda[cite: 198].
* [cite_start]Formulir *login* dirancang untuk memuat beberapa elemen wajib: kolom untuk input *username*, kolom untuk input *password*, kotak centang (*check box*) untuk fitur "remember me", tombol *login* untuk mengirim data (*submit*), serta tautan/tombol untuk kembali ke beranda utama[cite: 198].

**C. Pemrosesan Data (`controller/proses_login.php`)**
* Berkas ini mengeksekusi logika validasi[cite: 199]. Jika proses validasi kredensial berhasil, sistem akan menginisialisasi nilai ke dalam variabel session untuk mempertahankan status masuk pengguna[cite: 154]. 
* [cite_start]Apabila kotak centang "remember me" diaktifkan, sistem akan menjalankan fungsi `setcookie()` untuk menyimpan data pengguna secara lokal di peramban sesuai jangka waktu yang ditentukan[cite: 160, 186].

**D. Proses Keluar (`controller/logout.php`)**
* [cite_start]Berkas ini mengeksekusi proses penghentian sesi yang sedang berjalan[cite: 199]. [cite_start]Seluruh data otentikasi pengguna pada session akan dihapus menggunakan fungsi `session_destroy()`, memastikan akses keamanan dikembalikan ke status awal[cite: 168, 169].

### 5. Panduan Instalasi dan Penggunaan Lokal
1. Pastikan lingkungan pengembangan (*local server environment*) seperti XAMPP telah terinstal dan terkonfigurasi dengan baik.
2. Tempatkan seluruh folder proyek ini ke dalam direktori publik web server (contoh: folder `htdocs` pada XAMPP).
3. Jalankan layanan modul Apache melalui panel kontrol aplikasi *server*.
4. Akses proyek melalui peramban web dengan mengetikkan alamat `http://localhost/[nama_folder_proyek]`.

---
*Laporan ini disusun sebagai bentuk dokumentasi teknis dari penyelesaian praktikum dasar pemrograman PHP.*
