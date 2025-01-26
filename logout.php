<?php
session_start();  // Memulai session

// Menghancurkan session dan menghapus semua data login
session_unset();
session_destroy();

// Redirect kembali ke halaman login
header('Location: login.php');
exit();
?>
