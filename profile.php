<?php
session_start();  // Memulai session

// Cek apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');  // Arahkan ke login.php jika belum login
    exit();  // Pastikan eksekusi berhenti di sini
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        /* Gaya untuk halaman profil */
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;  /* Membesarkan font body */
            background: linear-gradient(135deg, yellow, white); /* Background campuran yellow dan white */
            margin: 0;
            padding: 0;
        }

        .marquee {
            width: 100%;
            background-color: yellow;
            color: black;
            text-align: center;
            font-size: 20px;  /* Membesarkan ukuran font untuk teks berjalan */
            font-weight: bold;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(85, 77, 77, 0.3);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .container {
            margin: 80px auto 40px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Item putih dengan sedikit transparansi */
            color: black;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 70%;
            max-width: 500px;
            text-align: center;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .content {
            width: 100%;
        }

        .profile-img {
            width: 150px;  /* Membesarkan foto */
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgb(74, 69, 69);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-top: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            margin: 0;
            color: rgb(32, 11, 18);
            font-weight: bold;
            font-size: 24px;  /* Membesarkan font ukuran judul */
        }

        table {
            margin: 10px auto;
            width: 90%;
            border-collapse: separate;
            border-spacing: 0 8px;
            font-size: 16px;  /* Membesarkan font untuk tabel */
        }

        th, td {
            padding: 6px 10px;
            text-align: left;
            background-color: white;
            color: black;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th {
            font-weight: bold;
            background-color: rgb(121, 20, 72);
            color: white;
            text-align: center;
        }

        tr td:first-child {
            font-weight: bold;
            color: rgb(27, 26, 27);
            width: 40%;
        }

        .logout-btn {
            padding: 12px 25px;  /* Membesarkan tombol logout */
            background-color: rgb(7, 7, 7);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 18px;  /* Membesarkan font tombol logout */
        }

        .logout-btn:hover {
            background-color: rgb(219, 112, 147);
        }
    </style>
</head>
<body>

    <!-- Teks Berjalan -->
    <div class="marquee">
        <marquee>Selamat datang Violin Juneyla Nandita</marquee>
    </div>

    <div class="container">
        <!-- Konten utama -->
        <div class="content">
            <h2>PORTOFOLIO</h2>

            <!-- Foto Profil -->
            <img class="profile-img" src="photo.jpg" alt="Foto Profil">

            <!-- Tabel Biodata -->
            <table>
                <tr>
                    <td>Nama</td>
                    <td>Violin Juneyla Nandita</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>09031182328009</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>SIREG 4C</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>Sistem Informasi</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>Ilmu Komputer</td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td>Universitas Sriwijaya</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>Palembang, Sumatera Selatan</td>
                </tr>
            </table>

            <!-- Tombol Logout -->
            <form action="logout.php" method="post">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

</body>
</html>
