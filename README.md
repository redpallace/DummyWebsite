![image](https://github.com/user-attachments/assets/f1309563-c560-4dde-bb5c-37d1c15ca3b9)

Kita mulai dengan tampilan portal login anggota dari sebuah website yang terlihat biasa: hanya dua kolom Username dan Password, tanpa tanda bahaya.

Di kolom Username, kita ketik karakter petik tunggal (') dan klik Login.

Dalam sekejap, server menampilkan SQL error, pertanda aplikasi langsung mengeksekusi input tanpa penyaringan.

Error ini membuka celah bagi penyerang untuk menyisipkan perintah SQL berbahaya dan memanipulasi database.

Selanjutnya, kita beralih ke terminal untuk menjalankan sqlmap.

Pertama, sqlmap mengidentifikasi bahwa sistem database di belakang aplikasi adalah MySQL.

Kemudian sqlmap melakukan enumerasi dan menemukan nama database: dummyweb.

Kita lanjutkan dengan perintah dump pada tabel users di database dummyweb.

Hanya dalam hitungan detik, sqlmap berhasil mengekspor 20 entri data pengguna, nama lengkap, username, password, alamat, dan nomor telepon.

Hasil ini menunjukkan betapa cepatnya data sensitif bisa dicuri jika aplikasi tidak terlindungi.

Untuk mencegah serangan seperti ini, penting sekali menerapkan Web Application Firewall (WAF) di lapisan depan aplikasi:

Pasang WAF dengan rule set OWASP Core Rule Set, khususnya modul SQL Injection.

Aktifkan mode blocking agar payload mencurigakan langsung ditolak, bukan hanya dicatat.

Lakukan tuning berkala untuk meminimalkan false positives tanpa melemahkan proteksi.

Integrasikan log WAF ke sistem SIEM untuk memantau serangan real-time dan melakukan forensik.

Pastikan WAF selalu update signature dan heuristiknya mengikuti teknik serangan terbaru.

Dengan WAF yang terkonfigurasi dengan baik, serangan injeksi SQL bisa diblokir sebelum mencapai aplikasi, menjaga keamanan data pengguna.

Jangan tunggu sampai data bocor implementasikan WAF Anda sekarang dan lindungi aplikasi dari SQL Injection!
