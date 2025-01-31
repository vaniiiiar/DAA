## ANALISA PRODUCT SOLUTION 

1. Nama produk menggunakan tipe data String karna berupa teks
2. Harga produk untuk digunakan transaksi jadi menggunakan tipe data integer digunakan untuk nilai numerik
3. Kategori produk menggunakan tipe data string. Yang mempunyai relasi antara produk dan kategori menggunakan id kategori dan id produk 

### Langkah Langkah untuk membangun sampleapp
 1. Mengekstrak file sampleapp.zip
 2. masuk ke direktori sampleapp
 3. buka dan nyalakan docker dengan perintah
	 * docker compose up -d * 
 4. docker exec -it sample bash, untuk masuk ke dalam container dengan perintah
 5. lalu build Laravel dengan perintah 
 	 composer create-project --prefer-dist raugadh/fila-starter .
 6. sesuaikan konfigurasi database dan aplikasi pada file .env
 7. generate kunci aplikasi
	 php artisan key:generate
 8. buat link storage dengan
	 php artisan storage:link
 9. jalankan migrasi 
	 php artisan migrate
 10. mengatur izin akses dngn perintah
	 chown -R www-data:www-data storage/*
	 chown -R www-data:www-data bootstrap/*
 11. iniliasisasi projek dengan perintah
	 php artisan project:init

### BUAT DAN KONFIGURASI MODEL
1. php artisan make:model Kategori -ms
   php artisan make:model Product -ms
