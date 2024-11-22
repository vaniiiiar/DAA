# Dokumen Persyaratan Bisnis (BRD)  
### Proyek: Sistem Manajemen Data Pelanggan  
**Versi:** 1.0  
**Tanggal:** 15 November 2024  

---

## 1. Tujuan Proyek  
**Objektif**:  
Membangun sistem yang memungkinkan pengelolaan informasi pelanggan secara efektif, menyediakan akses bagi admin untuk mengelola data pelanggan, riwayat transaksi, dan informasi loyalitas, serta memungkinkan pelanggan untuk mengakses dan memperbarui informasi mereka secara real-time.

**Keuntungan**:  
- Memungkinkan pengumpulan data pelanggan secara akurat dan mudah diakses.
- Meningkatkan kepuasan pelanggan melalui layanan yang lebih personal dan responsif.
- Mendukung program loyalitas dan manajemen hubungan pelanggan (CRM) secara sederhana namun efektif.

---

## 2. Lingkup Proyek  
Sistem Manajemen Data Pelanggan akan memiliki fitur untuk mendukung admin dan pelanggan dalam melakukan manajemen data pelanggan yang meliputi informasi dasar, riwayat transaksi, program loyalitas, dan alamat. Sistem ini akan dirancang untuk digunakan dalam lingkungan penjualan ritel, tanpa fitur pembelian atau transaksi keuangan secara langsung.

---

## 3. Fitur Utama  

### Untuk Admin  
**Pengelolaan Data Pelanggan**:  
Admin memiliki akses penuh untuk mengelola seluruh aspek data pelanggan di toko, mencakup:
  - **Tambah Data Pelanggan**: Menambahkan data pelanggan baru dengan mengisi detail seperti nama, nomor telepon, email, dan alamat.
  - **Perbarui Data Pelanggan**: Mengedit informasi pelanggan, seperti nama, nomor telepon, email, dan alamat.
  - **Hapus Data Pelanggan**: Menghapus data pelanggan yang sudah tidak relevan atau dibutuhkan.
  
**Riwayat Transaksi dan Program Loyalitas**:  
Admin dapat mengakses informasi terkait riwayat transaksi pelanggan dan mengelola informasi loyalitas untuk mendukung program reward atau diskon:
  - **Lihat Riwayat Transaksi**: Meninjau semua transaksi pelanggan sebelumnya, mendukung program loyalitas, dan memberikan layanan personalisasi.
  - **Kelola Poin atau Level Loyalitas**: Memperbarui poin atau level loyalitas pelanggan berdasarkan jumlah transaksi.

### Untuk Pelanggan  
**Akses Informasi Pribadi**:  
Pelanggan dapat mengakses data dasar mereka saat login ke sistem, mencakup:
  - **Lihat Data Pribadi**: Mengakses data pelanggan, seperti nama dan nomor telepon, untuk keperluan identifikasi dan layanan.
  - **Perbarui Informasi Kontak**: Memperbarui informasi kontak pelanggan, jika terjadi perubahan data.
  
**Riwayat Transaksi dan Program Loyalitas**:  
Pelanggan dapat melihat riwayat pembelian mereka sebelumnya dan memantau poin loyalitas mereka.
  - **Lihat Riwayat Transaksi**: Meninjau transaksi sebelumnya untuk mengetahui pembelian produk atau layanan yang telah dilakukan.
  - **Cek Poin Loyalitas**: Melihat status poin loyalitas yang dimiliki berdasarkan transaksi yang telah dilakukan.

---

## 4. Persyaratan Fungsional  

### Sistem Login dan Pengelolaan Akses  
- **Akses Berbasis Peran**: Sistem memiliki kontrol akses berbasis peran yang dikelola oleh admin:
  - **Admin**: Memiliki akses penuh untuk mengelola data pelanggan, riwayat transaksi, dan program loyalitas.
  - **Pelanggan**: Diberikan akses untuk melihat dan memperbarui informasi pribadi serta melihat riwayat transaksi dan poin loyalitas mereka.

### Manajemen Data Pelanggan  
- **Tambah Pelanggan**: Menambahkan informasi dasar pelanggan untuk membangun database pelanggan.
- **Perbarui Data Pelanggan**: Mengubah informasi pelanggan sesuai kebutuhan.
- **Hapus Data Pelanggan**: Menghapus data pelanggan yang sudah tidak diperlukan.

### Riwayat dan Program Loyalitas  
- **Riwayat Transaksi Pelanggan**: Menyimpan dan mengakses data riwayat pembelian pelanggan untuk analisis perilaku dan program reward.
- **Program Loyalitas**: Menyediakan fitur untuk manajemen poin atau level loyalitas berdasarkan transaksi pelanggan.

### Notifikasi atau Komunikasi Pelanggan (Opsional)  
- **Email dan SMS**: Jika tersedia, sistem dapat mengirimkan notifikasi atau pesan promosi berdasarkan data kontak pelanggan.

---

## 5. Model, Migrasi, dan Resource  

### Model dan Struktur Tabel  

1. **Pelanggan (Customers Table)**: Menyimpan informasi dasar pelanggan.
   - id (Primary Key)
   - name - Nama lengkap pelanggan (varchar)
   - phone_number - Nomor telepon (varchar)
   - email - Email pelanggan (varchar, opsional)
   - address - Alamat pelanggan (text, opsional)
   - created_at - Waktu pendaftaran pelanggan (timestamp)
   - updated_at - Waktu terakhir data diperbarui (timestamp)

2. **Riwayat Transaksi (Transactions Table)**: Menyimpan detail pembelian pelanggan.
   - id (Primary Key)
   - customer_id - ID pelanggan (foreign key)
   - transaction_date - Tanggal transaksi (timestamp)
   - details - Detail produk atau transaksi (text)
   - created_at - Waktu pembuatan transaksi (timestamp)

3. **Loyalty Program (Loyalty Table)**: Menyimpan data loyalitas atau reward pelanggan.
   - id (Primary Key)
   - customer_id - ID pelanggan (foreign key)
   - points - Poin atau level loyalitas (int)
   - created_at - Waktu data loyalitas dibuat (timestamp)

### Resource yang Dibutuhkan  

#### Halaman untuk Admin  
1. **Halaman Pengelolaan Data Pelanggan**: Mengelola informasi pelanggan.
2. **Halaman Riwayat Transaksi**: Menampilkan riwayat transaksi pelanggan.
3. **Halaman Program Loyalitas**: Menampilkan dan memperbarui poin atau level loyalitas.

#### Halaman untuk Pelanggan  
1. **Halaman Profil Pelanggan**: Menampilkan dan memungkinkan pengeditan informasi dasar pelanggan.
2. **Halaman Riwayat Transaksi**: Menampilkan riwayat transaksi pelanggan.
3. **Halaman Program Loyalitas**: Menampilkan poin loyalitas dan status program loyalitas pelanggan.

---

## 6. Persyaratan Non-Fungsional  

- **Keamanan**: Sistem harus memiliki otentikasi dan otorisasi berbasis peran (RBAC) untuk melindungi data pelanggan.
- **Ketersediaan**: Sistem diharapkan dapat diakses pada jam operasional toko dengan performa yang stabil dan responsif.
- **Backup Data**: Mendukung backup otomatis untuk memastikan keamanan data pelanggan.
- **Kompatibilitas**: Sistem dapat diakses melalui desktop dan perangkat mobile untuk memudahkan admin dan pelanggan dalam mengakses data kapan pun.

---

Dengan perubahan ini, sistem sekarang memungkinkan **admin** untuk mengelola data pelanggan dan **pelanggan** untuk mengakses dan memperbarui informasi mereka serta melihat riwayat transaksi dan status loyalitas mereka.