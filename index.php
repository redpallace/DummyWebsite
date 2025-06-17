<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$user = "root";
$pass = "password123";
$db = "dummyweb";


$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$login_message = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $login_message = "<h3 style='color: #28a745; text-align: center;'>Login berhasil! Selamat datang, " . htmlspecialchars($user['nama_lengkap']) . "!</h3>";
    } else {
        
        $login_message = "<p style='color: #dc3545; font-weight: bold; text-align: center;'>Login gagal. Username atau password salah.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Pertahanan Bikini Bottom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 60px;
            flex-wrap: wrap;
        }
        #branding {
            display: flex;
            align-items: center;
        }
        #branding img {
            height: 50px;
            margin-right: 10px;
        }
        #branding span {
            font-size: 20px;
            font-weight: bold;
        }
        nav {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 12px;
            transition: background-color 0.3s;
            border-radius: 4px;
        }
        nav a:hover {
            background-color: #0055a4;
        }
        .welcome {
            text-align: center;
            font-size: 20px;
            padding: 15px;
            background-color: #e9ecef;
            font-weight: bold;
            color: #003366;
        }
        .container {
            padding: 20px 4%;
        }
        .content h2 {
            color: #003366;
            text-align: center;
            margin-bottom: 30px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background: white;
            width: 320px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card h3 {
            padding: 15px;
            background: #003366;
            color: white;
            margin: 0;
            font-size: 18px;
        }
        .card p {
            padding: 15px;
            font-size: 15px;
            color: #333;
        }
        .login-section {
            background: #ffffff;
            padding: 40px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 450px;
        }
        .login-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        .login-section .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        .login-section label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .login-section input[type="text"],
        .login-section input[type="password"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-section input[type="submit"] {
            padding: 12px;
            background-color: #003366;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .login-section input[type="submit"]:hover {
            background-color: #0055a4;
        }
        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div id="branding">
            <img src="pth.png" alt="Logo One Piece">
            <span>Dinas Pertahanan Bikini Bottom</span>
        </div>
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Profil</a>
            <a href="#">Layanan</a>
            <a href="#">Publikasi</a>
            <a href="#">Kontak</a>
        </nav>
    </header>

    <div class="welcome">Selamat datang di portal resmi Dinas Pertahanan Bikini Bottom</div>
    <section class="hero"></section>

    <div class="container content">
        <h2>Berita Terbaru</h2>
        <div class="cards">
            <div class="card">
                <img src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg" alt="[Gambar rapat darurat]">
                <h3>Pemerintah Dunia Mengadakan Rapat Darurat</h3>
                <p>Pemerintah Dunia menggelar rapat mendadak untuk membahas ancaman yang semakin meningkat dari Bajak Laut Yonko dan Pasukan Revolusi.</p>
            </div>
            <div class="card">
                <img src="https://www.armytimes.com/resizer/v2/JZAGWVY555A7LKAJA3L2P3MUUQ.jpg?auth=f6e335b6c4e78bce6e15ab3ffdc51688ba808200001ea30d52ad127715bbafeb&width=1024&height=682" alt="[Gambar seorang laksamana angkatan laut]">
                <h3>Strategi Baru Angkatan Laut Melawan Yonko</h3>
                <p>Fleet Admiral Akainu merancang kebijakan baru untuk memperketat pengawasan di Grand Line, khususnya di wilayah yang didominasi oleh Bajak Laut Topi Jerami.</p>
            </div>
            <div class="card">
                <img src="https://st2.depositphotos.com/1325771/5666/i/950/depositphotos_56662345-stock-photo-business-handshake.jpg" alt="[Gambar pertemuan para pemimpin dunia]">
                <h3>Reverie 2025: Keputusan Penting Diambil</h3>
                <p>Para pemimpin kerajaan di dunia berkumpul dalam Reverie untuk membahas hubungan dengan Pemerintah Dunia dan kebijakan terkait bajak laut.</p>
            </div>
        </div>

        <section class="login-section">
            <h2>Portal Login Anggota</h2>
            <?php echo $login_message; ?>
            <form method="post" action="index.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" value="Login">
            </form>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Dinas Pertahanan Bikini Bottom. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>