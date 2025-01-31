# ANALISA PENGEMBANGAN SISTEM UJIAN ONLINE BERBASIS WEBSITE

## I. Abstrak

Ujian berbasis online menggunakan teknologi digital untuk mengelola, menyampaikan, dan menilai ujian secara efisien. Dalam pengembangan sistem menggunakan Laravel dan Filament, platform ini menawarkan kontrol administrasi berbasis web yang intuitif dengan berbagai fitur seperti pembuatan soal ujian, pengaturan jadwal, dan penilaian otomatis. Dengan menggunakan Filament Laravel, pengelola sistem dapat mengelola ujian dengan mudah, sementara peserta ujian dapat mengakses ujian kapan saja dan di mana saja dengan koneksi internet.

## II. Pendahuluan

Transformasi digital dalam bidang pendidikan telah membawa perubahan besar dalam metode evaluasi pembelajaran. Ujian berbasis online semakin banyak diterapkan oleh institusi pendidikan untuk menilai kompetensi dan kemampuan individu. Fleksibilitas dan skalabilitas sistem ini memungkinkan ujian dapat dilakukan tanpa batasan geografis, sehingga memberikan akses lebih luas bagi peserta ujian.

Namun, tantangan seperti aksesibilitas, keamanan data, dan kemungkinan kecurangan tetap menjadi perhatian. Oleh karena itu, diperlukan pengembangan sistem ujian online yang mampu menjawab tantangan tersebut dengan menyediakan fitur-fitur yang meningkatkan validitas dan reliabilitas hasil ujian.

## III. Tujuan dan Sasaran Proyek

Pengembangan sistem ujian berbasis online bertujuan untuk menciptakan platform yang efisien, aman, dan mudah digunakan. Tujuan utama proyek ini meliputi:

* **Efisiensi Evaluasi** : Mengurangi penggunaan kertas dan proses manual.
* **Akses Terbatas** : Hanya dapat diakses di sekolah untuk menjaga kontrol ujian.
* **Analisis Hasil Cepat** : Memberikan hasil ujian secara instan untuk evaluasi lebih cepat.

## IV. ANALISA SWOT

### Strengths (Kekuatan)

* **Efisiensi Biaya dan Sumber Daya** : Mengurangi kebutuhan cetak soal dan pengawasan manual.
* **Otomatisasi Penilaian** : Penilaian otomatis yang lebih cepat dan akurat.
* **Keamanan Data** : Data peserta ujian dapat dilindungi dengan enkripsi dan autentikasi.

### Weaknesses (Kelemahan)

* **Ketergantungan pada Infrastruktur Sekolah** : Peserta harus berada di sekolah untuk mengikuti ujian, yang membatasi fleksibilitas.
* **Kecenderungan Kecurangan** : Meskipun ujian dilakukan di sekolah, tetap ada potensi kecurangan tanpa pengawasan yang lebih ketat.

### Opportunities (Peluang)

* **Penerapan pada Berbagai Kebutuhan Evaluasi Akademik** : Dapat digunakan untuk ujian lainnya di lingkungan akademik, seperti ujian tengah semester atau ujian tugas akhir.

### Threats (Ancaman)

* **Keamanan Data** : Meskipun dilakukan di sekolah, risiko pencurian atau penyalahgunaan data tetap ada.

# V. ANALISA 5W1H

| Pertanyaan      | Jawaban                                                                                                                                       |
| --------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| What (Apa)      | Ujian berbasis online yang dilaksanakan dengan sistem digital hanya di lingkungan sekolah.                                                    |
| Why (Mengapa)   | Untuk meningkatkan efisiensi evaluasi akademik di lingkungan sekolah dengan sistem penilaian otomatis.                                        |
| Who (SIapa)     | Staff akademik, pengajar, dan peserta ujian di sekolah.                                                                                       |
| Where (Dimana)  | Dilakukan di lingkungan sekolah, diakses hanya di lokasi yang terhubung dengan infrastruktur sekolah.                                         |
| When (Kapan)    | Ujian dilaksanakan sesuai dengan jadwal yang ditentukan oleh sekolah.                                                                         |
| How (Bagaimana) | Menggunakan platform ujian online berbasis web yang hanya dapat diakses di area sekolah, dengan pengawasan yang dilakukan di lokasi tersebut. |

# VI. STAKEHOLDERS

1. **Institusi Pendidikan :** Sekolah yang membutuhkan sistem evaluasi digital seperti stagg akademik yang mengelola sistem ujian
2. **Peserta Ujian :** Siswa yang mengikuti ujian online dan menyelesaikan ujian
3. **Guru :** Penanggung jawab penyusunan soal, penilaian ujian, dan memantau proses ujian.

# VII. KLASIFIKASI PENILAIAN

#### A. Stuktur Sistem Penilaian

Sistem penilaian ini bertujuan untuk memberikan gambaran yang jelas tentang tingkat pemahaman peserta dalam setiap mata pelajaran berdasarkan jumlah soal yang dijawab benar. Dengan **50 soal** per mata pelajaran, masing-masing soal dihitung sebagai satu unit nilai, yang akhirnya mengarah pada klasifikasi nilai  **A, B, C, D, dan E** . Sistem ini lebih sederhana karena fokus pada jumlah soal yang benar tanpa menghitung poin per soal.

#### B. Stuktur Penilaian Berdasarkan Jumlah Soal yang Benar

##### Bahasa Inggris (ENG-24):

* **45 - 50 soal benar** → **Sangat Baik (A)**
* **40 - 44 soal benar** → **Baik (B)**
* **35 - 39 soal benar** → **Cukup (C)**
* **30 - 34 soal benar** → **Kurang (D)**
* **< 30 soal benar** → **Tidak Lulus (E)**

##### Bahasa Indonesia (IND-245)

* **43 - 50 soal benar** → **Sangat Baik (A)**
* **38 - 42 soal benar** → **Baik (B)**
* **33 - 37 soal benar** → **Cukup (C)**
* **28 - 32 soal benar** → **Kurang (D)**
* **< 28 soal benar** → **Tidak Lulus (E)**

##### Ilmu Pengetahuan Sosial (IPS-247) :

* **44 - 50 soal benar** → **Sangat Baik (A)**
* **39 - 43 soal benar** → **Baik (B)**
* **34 - 38 soal benar** → **Cukup (C)**
* **29 - 33 soal benar** → **Kurang (D)**
* **< 29 soal benar** → **Tidak Lulus (E)**

# VIII. Ketentuan User

#### A. **Staff Akademik**

* **Peran** : Pengelola dan penyelenggara sistem ujian online.
* **Tanggung Jawab** : Menyusun ujian, mengelola akun peserta dan pengajar, serta memastikan ketersediaan perangkat dan koneksi.

#### B. **Pengajar**

* **Peran** : Menyusun soal ujian, mengawasi ujian, dan menilai hasil.
* **Tanggung Jawab** : Menyusun soal sesuai kurikulum dan memastikan penilaian yang adil.

#### C. **Peserta Ujian**

* **Peran** : Mengikuti ujian sesuai jadwal.
* **Tanggung Jawab** : Mematuhi aturan, mengikuti ujian di perangkat yang sesuai, dan memastikan koneksi internet stabil.

# IX. Persyaratan Ujian Online

### **1. Persyaratan Fungsional**

* **Pembuatan dan Pengelolaan Soal Ujian** : Pengajar dapat membuat dan mengelola soal ujian dalam berbagai format (pilihan ganda, benar/salah).
* **Penjadwalan Ujian** : Pengajar atau admin dapat mengatur jadwal ujian, termasuk durasi dan batas waktu.
* **Penilaian Otomatis** : Sistem memberikan penilaian otomatis untuk soal pilihan ganda.
* **Penyampaian Hasil Ujian** : Hasil ujian disampaikan dengan cepat dan jelas kepada peserta.

### **2. Persyaratan Non-Fungsional**

* **Keamanan** : Sistem harus dilindungi dengan enkripsi dan autentikasi untuk melindungi data peserta ujian.
* **Kinerja** : Sistem harus mampu menangani banyak pengguna sekaligus tanpa mengalami keterlambatan.
* **Skalabilitas** : Sistem harus dapat menyesuaikan dengan peningkatan jumlah peserta ujian di masa depan.

### **3. Persyaratan Infrastruktur**

* **Server dan Penyimpanan** : Server yang mampu menangani beban ujian dan menyimpan data dengan aman.
* **Koneksi Internet** : Koneksi internet yang stabil di sekolah untuk mendukung ujian online.

### **4. Persyaratan Pengguna**

* **Pengajar** : Memiliki hak akses untuk membuat soal, menilai, dan mengakses data hasil ujian.
* **Peserta Ujian** : Harus memiliki akun untuk mengikuti ujian dan menerima hasil.
* **Admin** : Bertanggung jawab mengelola sistem, akun, pengaturan ujian, dan pemantauan sistem.

# X. Alur Proses

### **Staff Akademik**

1. **Registrasi & Pengaturan Sistem:** Mendaftar ke sistem dan mengelola akun pengajar serta peserta ujian.
2. **Penjadwalan & Pengaturan Ujian:** Menentukan jadwal ujian dan jenis soal ujian.
3. **Pengawasan & Pengelolaan Hasil:** Memantau ujian dan mengelola hasil ujian.

### **Pengajar**

1. **Login & Menyusun Soal:** Mengakses sistem dan menyusun soal ujian.
2. **Penjadwalan Ujian:** Menentukan waktu ujian.
3. **Pemantauan & Penilaian:** Mengawasi ujian dan menilai hasil peserta.

### **Peserta Ujian**

1. **Registrasi & Persiapan:** Mendaftar dan memastikan perangkat berfungsi.
2. **Mengikuti Ujian:** Mengikuti ujian sesuai jadwal.
3. **Pengiriman & Menerima Hasil:** Mengirimkan jawaban dan menerima hasil ujian.
