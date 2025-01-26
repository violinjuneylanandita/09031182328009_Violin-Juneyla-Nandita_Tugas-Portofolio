<?php
session_start();  // Memulai session

// Cek jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi login
    if ($_POST['username'] == 'viow' && $_POST['password'] == '12345') {
        $_SESSION['logged_in'] = true;  // Set session untuk login
        header('Location: profile.php');  // Arahkan ke halaman profil
        exit();  // Pastikan eksekusi berhenti di sini
    } else {
        $error_message = "Username atau Password salah.";  // Pesan kesalahan
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Gaya CSS untuk halaman login */
        body {
            font-family: 'Times New Roman', Times, serif;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), /* Gelapkan latar */
                url('landmark.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .marquee {
            width: 100%;
            background-color: yellow;
            color: black;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.85); /* Transparansi lebih kecil */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 360px;  /* Lebih kecil sedikit */
            text-align: center;
            margin-top: 60px; /* Beri jarak dari teks berjalan */
        }

        h2 {
            font-size: 24px;
            color: rgb(3, 3, 3);
            margin-bottom: 20px; /* Menambahkan jarak bawah */
        }

        .unsri-logo {
            width: 220px;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;  /* Mengurangi padding untuk seimbang */
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* Untuk memastikan padding tidak memperbesar ukuran */
        }

        .login-btn {
            width: 100%;
            padding: 10px;  /* Menyesuaikan padding dengan input */
            background-color: rgb(15, 14, 14);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px; /* Menambahkan jarak antara password dan login */
        }

        .login-btn:hover {
            background-color: rgb(219, 112, 147);
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Untuk sejajarkan kotak input dengan tombol */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>

    <!-- Teks Berjalan -->
    <div class="marquee">
        <marquee>Selamat datang di website Universitas Sriwijaya!</marquee>
    </div>

    <div class="login-container">
        <img src="logo.png" alt="Unsri Logo" class="unsri-logo">
        <h2>Login to Your Account</h2>
        
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <?php
        if (isset($error_message)) {
            echo '<p class="error">' . $error_message . '</p>';
        }
        ?>
    </div>

</body>
</html>
