![image](https://github.com/user-attachments/assets/f1309563-c560-4dde-bb5c-37d1c15ca3b9)

Pertama, kita lihat tampilan portal login anggota dengan dua kolom sederhana: Username dan Password.

Selanjutnya, kita masukkan karakter petik tunggal (') di kolom Username dan menekan tombol Login.

Dalam hitungan detik, server mengembalikan SQL error, menandakan bahwa input kita langsung disuntikkan ke dalam query tanpa disanitasi.

Error ini memperlihatkan bahwa aplikasi rentan terhadap SQL Injection—penyerang bisa memanipulasi perintah SQL sesuai keinginannya.

Untuk membuktikan dampaknya, kita beralih ke terminal dan menjalankan sqlmap. Pertama, sqlmap mendeteksi bahwa database yang digunakan adalah MySQL.

Kemudian sqlmap melakukan enumerasi dan menemukan nama database: dummyweb.

Berikutnya, kita perintahkan sqlmap untuk men-dump tabel users dalam database tersebut.

Dalam waktu singkat, sqlmap berhasil mengekspor 20 entri data pengguna asli—mulai nama lengkap, username, password, alamat, hingga nomor telepon.

Hasil ini menunjukkan betapa mudahnya data sensitif dicuri saat aplikasi tidak melakukan input sanitization dan parameterized queries.

Kesimpulannya: satu celah kecil saja cukup membuka pintu bagi penyerang untuk mengakses seluruh informasi pengguna.

Akhiri dengan himbauan: “Lindungi aplikasi Anda dengan menerapkan prepared statements, validasi input di sisi server, dan prinsip least privilege pada akun database.”
