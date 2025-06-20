![image](https://github.com/user-attachments/assets/f1309563-c560-4dde-bb5c-37d1c15ca3b9)

Di depan kita ada sebuah portal web yang terlihat normal dan aman. Ada berita terbaru, dan tentu saja, ada kolom login untuk anggota.

Tapi, seberapa amankah data Anda di baliknya? Mari kita uji dengan satu karakter sederhana.

Di kolom Username, kita ketik karakter petik (') dan klik Login.

Website ini langsung menampilkan pesan error dari database. Ini bukan sekadar error biasa. Ini adalah pertanda bahaya, sebuah celah keamanan fatal yang disebut SQL Injection

SQL Injection adalah teknik serangan di mana penyerang menyisipkan (injeksi) potongan kode SQL ke dalam input aplikasi, misalnya dengan mengetikkan karakter kutip satu (') sehingga server database menjalankan perintah yang tidak diinginkan. Akibatnya, penyerang bisa membaca, mengubah, atau bahkan menghapus database.

Dan inilah hasilnya. SQLMap berhasil mencuri seluruh tabel pengguna. Nama lengkap, alamat rumah, nomor telepon, dan yang terpenting... password. Semua informasi sensitif ini sekarang terekspos.

Hanya dalam hitungan detik. Inilah bukti nyata betapa berbahayanya SQL Injection. Amankan aplikasi Anda sekarang juga.
