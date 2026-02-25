# Sistem Manajemen Sepatu Cibaduyut

## Deskripsi
Pada proyek ini, saya melanjutkan pengembangan dari modul sebelumnya yang masih berupa tampilan statis menggunakan HTML dan Bootstrap.  

Di tahap ini, saya mulai menambahkan **JavaScript** agar website menjadi lebih interaktif dan memiliki fitur seperti aplikasi sederhana (mini e-commerce).

---

## Fitur yang Dikembangkan

### Mode Gelap & Terang (Dark Mode)
Website sudah dilengkapi dengan fitur toggle antara mode gelap dan terang.

- Menggunakan JavaScript untuk menambahkan class `dark-mode`
- Preferensi user disimpan menggunakan **localStorage**
- Tampilan akan tetap sama walaupun halaman di-refresh

Jadi user bisa pilih mode sesuai kenyamanan mata.

---

### Fitur Beli Sepatu
Setiap produk memiliki tombol **Beli** yang bisa langsung digunakan.

Cara kerja:
- Saat tombol diklik, stok akan berkurang
- Jika stok masih tersedia → muncul notifikasi berhasil beli
- Jika stok habis → tombol berubah menjadi "Habis" dan tidak bisa diklik lagi

Di sini saya belajar penggunaan event listener dan manipulasi DOM.

---

### Fitur Wishlist (Modal Bootstrap)
Saya menambahkan fitur wishlist untuk menyimpan sepatu favorit.

Fitur ini menggunakan:
- **sessionStorage** → data hanya tersimpan selama browser aktif
- **Modal Bootstrap** → untuk menampilkan daftar wishlist

Cara kerja:
- Klik tombol ❤ Wishlist
- Produk akan masuk ke daftar wishlist
- Tidak bisa menambahkan item yang sama dua kali
- Wishlist bisa dilihat melalui tombol di navbar
- Bisa dikosongkan dengan tombol "Kosongkan"

Fitur ini membuat website terasa lebih seperti aplikasi e-commerce.

---

## Konsep yang Digunakan
Dalam pengembangan ini, saya menerapkan beberapa konsep JavaScript dasar:

- DOM Manipulation
- Event Listener
- Local Storage & Session Storage
- Conditional (if-else)
- Looping (forEach)

---

## Kesimpulan
Dengan adanya JavaScript, website yang awalnya hanya tampilan statis sekarang menjadi:

- Lebih interaktif
- Bisa merespon aksi user
- Memiliki fitur seperti aplikasi nyata

Fitur seperti **dark mode, beli produk, dan wishlist** membuat pengalaman pengguna menjadi lebih menarik dan modern.

---
